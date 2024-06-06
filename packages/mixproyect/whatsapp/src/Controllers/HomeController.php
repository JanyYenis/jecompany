<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Exports\FarmaD\ReporteCampana;
use App\Models\FarmaD\Contacto;
use App\Models\FarmaD\Especialidad;
use App\Models\FarmaD\Evento;
use App\Models\FarmaD\EventoDetalle;
use App\Models\FarmaD\Representante;
use App\Models\FarmaD\SubLinea;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactos = Contacto::all();
        $representantes = Representante::all();
        $info['representantes'] = $representantes;
        $info['medicos'] = $contactos;
        $info['especialidades'] = Especialidad::where('estado', Especialidad::ACTIVO)->get();
        $info['subLineas'] = SubLinea::where('estado', SubLinea::ACTIVO)->get();
        $info['campanas'] = Evento::where('tipo_canal', 'WHATSAPP')
            ->whereYear('fecha_evento', '=', date('Y'))
            ->whereMonth('fecha_evento', '=', date('m'))
            ->orderByDesc('cod_evento')
            ->get();
        return view('farma-d.home', $info);
    }

    
    public function listado(Request $request)
    {
        $fechas = explode(' - ', $request->input('fechas'));
        $representantes = $request->input('representantes') ?? [];
        $medicos = $request->input('medicos') ?? [];
        $especialidades = $request->input('especialidades') ?? [];
        
        $campanas = Evento::with('detalles')->selectRaw('eventos.cod_evento, eventos.nombre_evento as nombre, eventos.fecha_evento as fecha_evento, count(ed.cod_evento) as envio')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', '=', 'WHATSAPP')
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('subLineas')) {
                        $query->whereIn('sub_linea', $request->input('subLineas'));
                    }
                });
            })
            ->groupBy('eventos.cod_evento', 'eventos.fecha_evento', 'eventos.nombre_evento')
            ->orderByDesc('eventos.cod_evento')
            ->get();
        // dd($campanas->get());
        
        $campanasAperturas = Evento::with('detalles')->selectRaw('eventos.cod_evento, eventos.nombre_evento as nombre, eventos.fecha_evento as fecha_evento, count(ed.cod_evento) as apertura')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', 'WHATSAPP')
            ->whereHas('detalles', function($query){
                $query->where('ed.participacion', 'X');
            })
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('subLineas')) {
                        $query->whereIn('sub_linea', $request->input('subLineas'));
                    }
                });
            })
            ->groupBy('eventos.cod_evento', 'eventos.fecha_evento', 'eventos.nombre_evento')
            ->orderByDesc('eventos.cod_evento')
            ->get();
        
        $campanasCliks = Evento::with('detalles')->selectRaw('eventos.cod_evento, eventos.nombre_evento as nombre, eventos.fecha_evento as fecha_evento, count(ed.cod_evento) as respuesta')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', 'WHATSAPP')
            ->whereHas('detalles', function($query){
                $query->where('ed.clic_contacto_wpp', 'X');
            })
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('subLineas')) {
                        $query->whereIn('sub_linea', $request->input('subLineas'));
                    }
                });
            })
            ->groupBy('eventos.cod_evento', 'eventos.fecha_evento', 'eventos.nombre_evento')
            ->orderByDesc('eventos.cod_evento')
            ->get();

        $nuevasCampanas = [];
        foreach ($campanas as $key => $value) {
            $nuevasCampanas[$value->cod_evento] = $value;
            $nuevasCampanas[$value->cod_evento]->apertura = 0;
            $nuevasCampanas[$value->cod_evento]->respuesta = 0;
        }
        foreach ($campanasAperturas as $key => $value) {
            $nuevasCampanas[$value->cod_evento]->apertura = $value?->apertura ?? 0;
        }
        foreach ($campanasCliks as $key => $value) {
            $nuevasCampanas[$value->cod_evento]->respuesta = $value?->respuesta ?? 0;
        }
        // $nuevasCampanas = $campanas->concat($campanasAperturas)->concat($campanasCliks)->groupBy('eventos.cod_evento', 'eventos.fecha_evento', 'eventos.nombre_evento');
        // $nuevasCampanas = $campanas->concat($campanasAperturas)->concat($campanasCliks)->groupBy('eventos.cod_evento', 'eventos.fecha_evento', 'eventos.nombre_evento')->get();
        // dd($nuevasCampanas);
        
        return DataTables::of($nuevasCampanas)
        // return DataTables::eloquent($campanas)
            // ->addColumn("abierto", function ($model) {
            //     return $icono[$model?->participacion] ?? '<i class="fas fa-check fs-1"></i>';
            // })
            ->make(true);
    }

    public function detalle(Request $request, $campana = null)
    {
        if (!$campana) {
            return DataTables::of([])
            ->make(true);
        }

        $detalles = EventoDetalle::with(
            'mensaje',
            'subLinea',
            'representante',
            'contacto',
            'eventos',
        )
        ->where('cod_evento', $campana)
        ->orderByDesc('cod_detalle');

        // dd($detalles->get());

        return DataTables::eloquent($detalles)
            ->addColumn("nombre_representante", function ($model) {
                return $model->representante?->nombre_completo ?? 'N/A';
            })
            ->addColumn("nombre_contacto", function ($model) {
                return $model?->nombre_completo ?? 'N/A';
            })
            ->make(true);
    }
    
    public function exportar(Request $request, Evento $campana)
    {
        $campana->load(
            'detalles.subLinea',
            'detalles.representante',
            'detalles.contacto',
        );
        $info = [];
        foreach ($campana->detalles as $key => $value) {
            $info[$key]['cantidad'] = $key++;
            $info[$key]['nombre_representante'] = $value->representante?->nombre_completo;
            $info[$key]['nombre_medico'] = $value?->nombre_completo ?? 'N/A';
            $info[$key]['marca'] = $campana?->marca ?? 'N/A';
            $info[$key]['especialidad'] = $value?->especialidad ?? 'N/A';
            $info[$key]['sub_linea'] = $value?->subLinea?->nombre ?? 'N/A';
            $info[$key]['panel'] = $value?->origen ?? 'N/A';
            $info[$key]['participacion'] = $value?->participacion == 'X' ? 'SI' : 'NO';
            $info[$key]['click'] = $value?->clic_contacto_wpp == 'X' ? 'SI' : 'NO';
        }
        $data['campana'] = $campana;
        $data['registros'] = $info;
        return Excel::download(new ReporteCampana($data), "Campaña {$campana->marca} - {$campana->fecha_evento}.xlsx");
    }

    public function filtro(Request $request)
    {
        $fechas = explode(' - ', $request->input('fechas'));
        $representantes = $request->input('representantes') ?? [];
        $medicos = $request->input('medicos') ?? [];
        $especialidades = $request->input('especialidades') ?? [];
        $sub_linea = $request->input('sub_linea') ?? [];
        
        $subLineas = Evento::with('detalles')->selectRaw('sl.nombre, count(eventos.cod_evento) as cantidad')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', '=', 'WHATSAPP')
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('sub_linea')) {
                        $query->whereIn('sub_linea', $request->input('sub_linea'));
                    }
                });
            })
            ->groupBy('sl.nombre')
            ->orderByDesc('sl.nombre')
            ->get();
        
        $marcas = Evento::with('detalles')->selectRaw('eventos.marca as nombre, count(eventos.cod_evento) as cantidad')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', '=', 'WHATSAPP')
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('sub_linea')) {
                        $query->whereIn('sub_linea', $request->input('sub_linea'));
                    }
                });
            })
            ->groupBy('eventos.marca')
            ->orderByDesc('eventos.marca')
            ->get();
        
        $panel = Evento::with('detalles')->selectRaw('ed.origen as nombre, count(eventos.cod_evento) as cantidad')
            ->join('eventos_detalle as ed', 'eventos.cod_evento', '=', 'ed.cod_evento')
            ->join('sub_lineas as sl', 'sl.id', '=', 'ed.sub_linea')
            ->join('especialidades as es', 'ed.especialidad', '=', 'es.nombre')
            ->where('tipo_canal', '=', 'WHATSAPP')
            ->whereBetween('fecha_evento', [$fechas[0], $fechas[1]])
            ->whereHas('detalles', function($q) use($request) {
                $q->where(function($query) use($request){
                    if ($request->input('representantes')) {
                        $query->whereIn('cod_representante', $request->input('representantes'));
                    }
                    if ($request->input('especialidades')) {
                        $query->whereIn('especialidad', $request->input('especialidades'));
                    }
                    if ($request->input('medicos')) {
                        $query->whereIn('identificacion_medico', $request->input('medicos'));
                    }
                    if ($request->input('sub_linea')) {
                        $query->whereIn('sub_linea', $request->input('sub_linea'));
                    }
                });
            })
            ->groupBy('ed.origen')
            ->orderByDesc('ed.origen')
            ->get();

        // dd($subLinesas);
        $seriesSublineas = [];
        $lablesSublineas = [];
        foreach ($subLineas as $dato) {
            $seriesSublineas[] = $dato?->cantidad ?? 0;
            $lablesSublineas[] = $dato?->nombre ?? 'N/A';
        }
        $seriesMarcas = [];
        $lablesMarcas = [];
        foreach ($marcas as $dato) {
            $seriesMarcas[] = $dato?->cantidad ?? 0;
            $lablesMarcas[] = $dato?->nombre ?? 'N/A';
        }
        $seriesPanel = [];
        $lablesPanel = [];
        foreach ($panel as $dato) {
            $seriesPanel[] = $dato?->cantidad ?? 0;
            $lablesPanel[] = $dato?->nombre ?? 'N/A';
        }
        return response()->json([
            'seriesSublineas' => $seriesSublineas,
            'lablesSublineas' => $lablesSublineas,
            'seriesMarcas' => $seriesMarcas,
            'lablesMarcas' => $lablesMarcas,
            'seriesPanel' => $seriesPanel,
            'lablesPanel' => $lablesPanel,
        ]);
    }
}
