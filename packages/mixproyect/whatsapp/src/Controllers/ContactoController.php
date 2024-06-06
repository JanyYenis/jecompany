<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Exceptions\ErrorException;
use App\Http\Requests\WhatsApp\StoreContactoRequest;
use App\Http\Requests\WhatsApp\UpdateContactoRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Mixproyect\Whatsapp\Models\Contacto;
use Mixproyect\Whatsapp\Models\Etiqueta;
use Yajra\DataTables\Facades\DataTables;

class ContactoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info['etiquetas'] = Etiqueta::where('estado', Etiqueta::ACTIVO)->get();
        
        return view('whatsapp::contactos.index', $info);
    }

    public function listado(Request $request)
    {
        // if (!can(Usuario::PERMISO_LISTADO)) {
        //     throw new ErrorException("No tienes permisos para acceder a esta sección.");
        // }

        $campanas = Contacto::with(
            'etiquetasActivo'
        )->where('estado', '!=', Contacto::ELIMINADO);

        return DataTables::eloquent($campanas)
            ->addColumn("estado", "whatsapp::contactos.columnas.estado")
            ->addColumn("action", "whatsapp::contactos.columnas.acciones")
            ->rawColumns(["action", "estado"])
            ->make(true);
    }
    
    public function store(StoreContactoRequest $request)
    {
        $datos = $request->all();
        $contacto = Contacto::create($datos);

        if (!$contacto) {
            throw new ErrorException("Error al intentar crear un contacto.");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se creo correctamente el contacto.',
        ];
    }

    public function cargarMedicos(Request $request)
    {
        $file = $request->file('archivo');
        $erroresEspecialidad = 0;
        $erroresSubLinea = 0;
        $errores = 0;
        $datosError = [];
        $ruta = '';
        // Cargar el archivo Excel o CSV
        $data = Excel::toArray([], $file[0]);
        // Recorrer los datos y guardar en la base de datos
        foreach ($data[0] as $index => $row) {
            if ($index) {
                if (!in_array("", $row, true) && !in_array(" ", $row, true)) {
                    if (is_numeric($row[6]) && is_numeric($row[5])) {
                        $existeSubLinea = SubLinea::where('nombre', $row[8])->exists();
                        $existeEspeciliadad = Especialidad::where('nombre', $row[3])->exists();
                        if ($existeSubLinea && $existeEspeciliadad) {
                            $especialidad = Especialidad::where('nombre', $row[3])->first();
                            $cantidadCodigo = strlen($row[6]);
                            $telefono = (string) $row[5];
                            $telefono = preg_replace('/\s+/', '', $telefono);
                            if (substr($telefono, 0, $cantidadCodigo) !== $row[6]) {
                                $telefono = $telefono; // Agrega $row[6] al principio
                            }
                            $contacto = Contacto::updateOrCreate([
                                'identificacion' => $row[2],
                            ],[
                                'email_1' => $row[4],
                                'nombres_completos' => $row[0],
                                'apellidos_completos' => $row[1],
                                'movil_1' => $telefono,
                                'cod_tel' => $row[8],
                                'nombre_tel' => $row[7],
                                'estado' => Contacto::ACTIVO,
                                'especialidad_promocional' => $especialidad->nombre,
                            ]);

                            $sub = SubLinea::where('nombre', $row[8])->first();
                            $sub_linea = SubLineaContacto::updateOrCreate([
                                "contacto_id" => $contacto->id,
                                "sub_linea_id" => $sub->id,
                                "especialidad_id" => $especialidad->id,
                            ],[
                                "estado" => SubLineaContacto::ACTIVO,
                            ]);
                        } else {
                            if (!$existeSubLinea) {
                                $erroresSubLinea++;
                                $datosError[] = $row;
                            }
                            if (!$existeEspeciliadad) {
                                $erroresEspecialidad++;
                                $datosError[] = $row;
                            }
                        }
                    } else {
                        $datosError[] = $row;
                    }
                } else {
                    $errores++;
                    $datosError[] = $row;
                }
            }
        }

        if (count($datosError)) {
            $fecha = date('Y-m-d');
            $filename = 'Medicos_error_'.$fecha.time().'.xlsx';
            Excel::store(new LogMedico($datosError), $filename, 'public_logs_farma');
            $ruta = 'logs/farma/'.$filename;
        }

        return [
            'estado' => !$errores && !$erroresEspecialidad && !$erroresSubLinea ? 'success' : 'info',
            'titulo' => !$errores && !$erroresEspecialidad && !$erroresSubLinea ? '¡Error!' : 'Importante',
            'mensaje' => !$errores && !$erroresEspecialidad && !$erroresSubLinea ? 'Se cargo el archivo correctamente' : "Se encontraron: {$errores} filas con campos vacios, {$erroresEspecialidad} especialidades incorrectas y {$erroresSubLinea} sub lineas incorrectas",
            'ruta' => $ruta ?? '',
            'vacios' => $errores ?? 0,
            'especilidades' => $erroresEspecialidad ?? 0,
            'subLineas' => $erroresSubLinea ?? 0,
        ];
    }

    public function show(Contacto $contacto)
    {
        $resultados = Contacto::select('contactos.id', 'contactos.nombres_completos', 'contactos.apellidos_completos', 'contactos.identificacion', 'contactos.email_1', 'contactos.movil_1', 'e.nombre as nombre_especialidad', 'contactos.estado', 'sl.nombre as nombre_sub_linea', 'r.nombre as nombre_agente', 'r.apellido as apellido_agente', 'slc.id as codigo')
            ->join('sub_lineas_contactos as slc', 'contactos.id', '=', 'slc.contacto_id')
            ->join('sub_lineas as sl', 'slc.sub_linea_id', '=', 'sl.id')
            ->join('especialidades as e', 'e.id', '=', 'slc.especialidad_id')
            ->leftJoin('agentes as r', 'r.sub_linea_id', '=', 'slc.sub_linea_id')
            ->where('contactos.id', $contacto->id)
            ->where('slc.estado', '!=', SubLineaContacto::ELIMINADO);

        // dd($resultados);
        return DataTables::eloquent($resultados)
            ->make(true);
    }

    public function edit(Request $request, Contacto $contacto)
    {
        $info['contacto'] = $contacto;
        $info['etiquetas'] = Etiqueta::where('estado', Etiqueta::ACTIVO)->get();

        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Datos cargados correctamente";
        $respuesta['html'] = view("whatsapp::contactos.modals.editar", $info)->render();
    
        return response()->json($respuesta);
    }

    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        $datos = $request->all();
        $actualizar = $contacto->update($datos);

        if (!$actualizar) {
            throw new ErrorException('A ocurrido un error al intentar actualizar el contacto.');
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se actualizo correctamente el contacto.',
        ];
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Contacto $contacto)
    {
        $eliminar = $contacto->eliminar();

        if (!$eliminar) {
            throw new ErrorException('A ocurrido un error al intentar eliminar el contacto.');
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se eliminado correctamente el contacto.',
        ];
    }
}
