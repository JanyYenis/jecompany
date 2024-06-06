<?php

namespace App\Http\Controllers;

use App\Events\UsuarioRolEvent;
use App\Exceptions\ErrorException;
use App\Models\ResponsableTarea;
use App\Models\Tarea;
use App\Models\Usuario;
use App\Notifications\TareaStoreNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TareaController extends Controller
{
    public function index()
    {
        $info['responsables'] = Usuario::where('estado', Usuario::ACTIVO)->get();

        return view('tareas.index', $info);
    }

    public function show(Request $request)
    {
        $usuario = auth()->user();
        
        $tareasPendientes = Tarea::with('responsablesActivos.responsable')
            ->where('estado', Tarea::PENDIENTE)
            ->where('cod_usuario', $usuario->id);
        if ($request->input('id')) {
            $tareasPendientes = $tareasPendientes->where('id', $request->input('id'));    
        }
        $tareasPendientes = $tareasPendientes->get() ?? [];
        $tareasEnEjecucion = Tarea::with('responsablesActivos.responsable')
            ->where('estado', Tarea::EN_EJECUCION)
            ->where('cod_usuario', $usuario->id);
        if ($request->input('id')) {
            $tareasEnEjecucion = $tareasEnEjecucion->where('id', $request->input('id'));    
        }
        $tareasEnEjecucion = $tareasEnEjecucion->get() ?? [];
        $tareasFinalizadas = Tarea::with('responsablesActivos.responsable')
            ->where('estado', Tarea::FINALIZADA)
            ->where('cod_usuario', $usuario->id);
        if ($request->input('id')) {
            $tareasFinalizadas = $tareasFinalizadas->where('id', $request->input('id'));    
        }
        $tareasFinalizadas = $tareasFinalizadas->get() ?? [];

        return response()->json([
            'estado' => 'success',
            'mensaje' => 'Se cargo correctamente el calendario',
            'tareasPendientes' => $tareasPendientes,
            'tareasEnEjecucion' => $tareasEnEjecucion,
            'tareasFinalizadas' => $tareasFinalizadas,
        ]);
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['fecha_inicio'] = Carbon::parse($datos['fecha_inicio']);
        $datos['fecha_fin'] = Carbon::parse($datos['fecha_fin']);
        $datos['cod_usuario'] = auth()->user()->id;

        $tarea = Tarea::create($datos);

        if (!$tarea) {
            throw new ErrorException("Error al intentar agregar la tarea.");
        }

        $responsable = ResponsableTarea::create([
            'cod_tarea' => $tarea->id,
            'cod_responsable' => $datos['responsable'],
        ]);

        if (!$responsable) {
            throw new ErrorException("Error al intentar agregar el representante a la tarea.");
        }

        Notification::sendNow(auth()->user(), new TareaStoreNotification(auth()->user(), $tarea));
        broadcast(new UsuarioRolEvent(auth()->user()));
        
        if (array_key_exists('notificar_responsable', $datos)) {
            $datosResponsables = Usuario::find($datos['responsable']);
            if (auth()->user()->id != $datosResponsables->id) {
                Notification::sendNow($datosResponsables, new TareaStoreNotification($datosResponsables, $tarea));
                broadcast(new UsuarioRolEvent($datosResponsables));
            }
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se agrego el evento correctamente.',
        ];
    }

    public function edit(Request $request, Tarea $tarea)
    {
        $tarea->load('responsableActivo');
        $tarea->valor_etiqueta = '';

        if ($tarea->etiquetas) {
            // Decodificar el JSON
            $array = json_decode($tarea->etiquetas, true);
    
            // Inicializar una cadena vacía para almacenar los valores
            $result = '';
    
            // Recorrer el array y concatenar los valores
            foreach ($array as $item) {
                $result .= $item['value'] . ', ';
            }
    
            // Eliminar la coma adicional al final de la cadena
            $tarea->valor_etiqueta = rtrim($result, ', ');
        }

        $info['tarea'] = $tarea;
        $info['responsables'] = Usuario::where('estado', Usuario::ACTIVO)->get();
        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Datos cargados correctamente";
        $respuesta['html'] = view("tareas.modals.editar", $info)->render();
    
        return response()->json($respuesta);
    }

    public function update(Request $request, Tarea $tarea)
    {
        $datos = $request->all();
        $datos['fecha_inicio'] = Carbon::parse($datos['fecha_inicio']);
        $datos['fecha_fin'] = Carbon::parse($datos['fecha_fin']);
        $datos['cod_usuario'] = auth()->user()->id;

        $actualizar = $tarea->update($datos);

        if (!$actualizar) {
            throw new ErrorException("Error al intentar actualizar la tarea.");
        }

        ResponsableTarea::where('cod_tarea', $tarea->id)->update(['estado' => ResponsableTarea::INACTIVO]);
        $responsable = ResponsableTarea::updateOrCreate([
            'cod_tarea' => $tarea->id,
            'cod_responsable' => $datos['responsable'],
        ], [
            'estado' => ResponsableTarea::ACTIVO
        ]);

        if (!$responsable) {
            throw new ErrorException("Error al intentar actulizar el representante de la tarea.");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se actualizo la tarea correctamente.',
        ];
    }

    public function delete(Request $request, Tarea $tarea)
    {
        $eliminar = $tarea->eliminar();

        if (!$eliminar) {
            throw new ErrorException("Error al intentar eliminar la tarea.");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se elimino correctamente la tarea.',
        ];
    }

    public function actualizarEstado(Request $request, Tarea $tarea)
    {
        $estado = $request->input('estado') ?? Tarea::PENDIENTE;

        $actualizar = $tarea->update(['estado' => $estado]);

        if (!$actualizar) {
            throw new ErrorException("Error al mover la tarea");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se movio la tarea correctamente.',
        ];
    }

    public function filtrar(Request $request)
    {
        $datos = $request->all();
        $palabras = count(explode(" ", $datos['search'])) ? explode(" ", $datos['search']) : [];
        $tareas = Tarea::with('responsableActivo.responsable')->whereNot('estado', Tarea::ELIMINADO)
            ->where(function($query) use($datos, $palabras) {
                if ($datos['titulo'] && count($palabras)) {
                    // Agregar condiciones para cada palabra
                    foreach ($palabras as $palabra) {
                        $query->orWhereRaw('LOWER(titulo) LIKE ?', ['%' . strtolower($palabra) . '%']);
                    }
                }
                if ($datos['descripcion'] && count($palabras)) {
                    // Agregar condiciones para cada palabra
                    foreach ($palabras as $palabra) {
                        $query->orWhereRaw('LOWER(descripcion) LIKE ?', ['%' . strtolower($palabra) . '%']);
                    }
                }
                if ($datos['etiqueta'] && count($palabras)) {
                    // Agregar condiciones para cada palabra
                    foreach ($palabras as $palabra) {
                        $query->orWhereRaw('LOWER(etiquetas) LIKE ?', ['%' . strtolower($palabra) . '%']);
                    }
                }
                if ($datos['etiqueta'] && count($palabras)) {
                    $query->whereHas('responsableActivo.responsable', function($q) use($palabras){
                        // Agregar condiciones para cada palabra
                        foreach ($palabras as $palabra) {
                            $q->orWhereRaw('LOWER(nombre) LIKE ?', ['%' . strtolower($palabra) . '%'])
                                ->orWhereRaw('LOWER(apellido) LIKE ?', ['%' . strtolower($palabra) . '%']);
                        }
                    });
                }
            });

        $tareas = $tareas->get();
        $resultados = [];
        foreach ($tareas as $index => $tarea) {
            $resultados[$index]['id'] = $tarea->id;
            $resultados[$index]['tipo'] = 1;
            $resultados[$index]['icono'] = 'fas fa-clipboard-list fs-1';
            $resultados[$index]['texto'] = $tarea?->titulo ?? 'N/A';
            $resultados[$index]['descripcion'] = $tarea?->descripcion ?? 'N/A';
        }

        // dd($resultados);
        $info['resultados'] = $resultados;
        $info['tituloResultados'] = 'Tareas';
        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Datos cargados correctamente";
        $respuesta['html'] = view("layouts.componentes.header.componentes-search.resultado", $info)->render();
    
        return response()->json($respuesta);
    }
}
