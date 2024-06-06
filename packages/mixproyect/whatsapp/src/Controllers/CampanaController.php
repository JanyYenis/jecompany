<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Exceptions\ErrorException;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mixproyect\Whatsapp\Models\Campana;
use Mixproyect\Whatsapp\Models\Contacto;
use Mixproyect\Whatsapp\Models\ContenidoCampana;
use Mixproyect\Whatsapp\Models\DetalleCampana;
use Mixproyect\Whatsapp\Models\Etiqueta;
use Mixproyect\Whatsapp\Models\EtiquetaContacto;
use Mixproyect\Whatsapp\Models\Mensaje;
use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Yajra\DataTables\Facades\DataTables;

class CampanaController extends Controller
{
    const NO_MOSTRAR = [
        // 'hello_world',
        'chat_bot'
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info['etiquetas'] = Etiqueta::all();
        $info['plantillas'] = $this->listadoPlantillas();
        $info['numeroTel'] = $this->numeroG;
        
        return view('whatsapp.campanas.index', $info);
    }

    
    public function listado(Request $request)
    {
        // if (!can(Usuario::PERMISO_LISTADO)) {
        //     throw new ErrorException("No tienes permisos para acceder a esta sección.");
        // }

        $campanas = Campana::with(
            'detalles',
        )
        ->orderByDesc('id');

        return DataTables::eloquent($campanas)
            ->addColumn("estado", "whatsapp.campanas.columnas.estado")
            ->addColumn("action", "whatsapp.campanas.columnas.acciones")
            ->rawColumns(["action", "estado"])
            ->make(true);
    }
        
    public function listadoPlantillas()
    {
        // dd($this->version, $this->waba_id, $this->token);
        $url = "https://graph.facebook.com/{$this->version}/{$this->waba_id}/message_templates?status=APPROVED";
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $obj = json_decode($response);
        // dd($obj);

        $datos = $obj?->data ?? [];
        $info = [];
        $cont = 1;
        foreach ($datos as $key => $dato) {
            if (!in_array($dato->name, self::NO_MOSTRAR)) {
                $info[$key]['cantidad'] = $cont;
                $info[$key]['id'] = $dato->id;
                $info[$key]['category'] = $dato->category;
                $info[$key]['language'] = $dato->language;
                $info[$key]['status'] = $dato->status;
                $info[$key]['name'] = $dato->name;
                $components = $dato->components;
                foreach ($components as $index => $component) {
                    $info[$key]['type'][] = $component->type;
                    if ($index == 0) {
                        $info[$key][$component->type]['text'] = property_exists($component, 'text') ? $component->text : 'N/A';
                        $info[$key][$component->type]['format'] = property_exists($component, 'format') ? $component->format : 'N/A';
                        $info[$key][$component->type]['example'] = 'N/A';
                        if (property_exists($component, 'example') && property_exists($component->example, 'header_handle')) {
                            $info[$key]['example'] = $component->example->header_handle[0];
                        }
                    } else {
                        $info[$key][$component->type]['text'] = property_exists($component, 'text') ? $component->text : 'N/A';
                        $info[$key][$component->type]['body_text'] = property_exists($component, 'example') ? $component->example->body_text[0]: ['N/A'];
                    }
                    
                }
                $cont++;
            }
        }

        return $info;
    }
    
    public function validarCampos($id_plantilla)
    {
        $info['header'] = null;
        $info['body'] = null;
        $info['contenido'] = null;
        if ($id_plantilla) {
            $url = "https://graph.facebook.com/{$this->version}/{$id_plantilla}";
            $metodo = 'GET';
            $response = $this->ejecutar($url, $metodo, $this->token);
            $plantilla = json_decode($response);
            if (count($plantilla->components)) {
                foreach ($plantilla->components as $key => $componente) {
                    if ($componente->type == 'HEADER') {
                        $info['header'] = $componente->format;
                    }
                    if ($componente->type == 'BODY') {
                        if (isset($componente->example) && isset($componente->example->body_text)) {
                            $info['body'] = count($componente->example->body_text[0]);
                        }
                    }
                }
                $info['contenido'] = $this->generalTextoplantilla($plantilla);
            }
        }

        return response()->json($info);
    }
    
    public function generalTextoplantilla($plantilla)
    {
        $info = 'N/A';
        foreach ($plantilla->components as $index => $component) {
            if ($component->type == "BODY") {
                $info = property_exists($component, 'text') ? $component->text : 'N/A';
            }
        }
        return $info;
    }
   
    public function store(Request $request)
    {
        $id_plantilla = $request->input('id_plantilla');
        $url = "https://graph.facebook.com/{$this->version}/{$id_plantilla}";
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $plantilla = json_decode($response);
        $datos['descripcion'] = $this->generalTextoplantilla($plantilla);
        $datos['fecha_programacion'] = Carbon::now();
        $datos['estado'] = Campana::ENVIADO;
        if ($request->input('accion') == 2) {
            $datos['estado'] = Campana::PROGRAMADO;
            $datos['fecha_programacion'] = Carbon::parse($request->input('fecha_programacion').' '.$request->input('hora_envio'));
        }

        $variablesMensaje = [];
        if ($request->input('variables')) {
            $variablesMensaje['variables'] = $request->input('variables');
            $valores = [];
            foreach ($variablesMensaje['variables'] as $key => $value) {
                $llave = "{{".($key+1)."}}";
                $valores[$llave] = $value;
            }

            $datos['descripcion'] = str_replace(array_keys($valores), array_values($valores), $datos['descripcion']);
        }

        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $nombreOriginal = time() . '.' . $archivo->getClientOriginalExtension();
            $mimeType = $archivo->getMimeType();

            // Verificar si el archivo es un PDF
            if ($mimeType == 'application/pdf') {
                $variablesMensaje['file'] = $nombreOriginal;
                $archivo->move(public_path('documentos/whatsapp'), $nombreOriginal);
                $datos['link_multimedia'] = 'documentos/whatsapp/'.$nombreOriginal;
            } elseif (str_starts_with($mimeType, 'image/')) {
                $variablesMensaje['file'] = $nombreOriginal;
                $archivo->move(public_path('img/whatsapp'), $nombreOriginal);
                $datos['link_multimedia'] = 'img/whatsapp/'.$nombreOriginal;
            } elseif ($mimeType == 'video/mp4') {
                $variablesMensaje['file'] = $nombreOriginal;
                $archivo->move(public_path('videos/whatsapp'), $nombreOriginal);
                $datos['link_multimedia'] = 'videos/whatsapp/'.$nombreOriginal;
            } else {
                throw new ErrorException('Error al intentar cargar la imagen.');
            }
        }
        
        $contactosKey = array_values(array_unique(explode(',', $request->input('contactos'))));
        if (count($contactosKey)) {
            $campana = Campana::create($datos);
            if (!$campana) {
                throw new ErrorException('Error al intentar crear la campaña.');
            }

            // $usuariosAdmin = Usuario::with('roles')->whereHas('roles', function($query){
            //     $query->whereIn('name', [Usuario::ROL_ADMINISTRADOR_FARMA]);
            // })
            // ->get();
            // foreach ($usuariosAdmin as $usu) {
            //     Notification::sendNow($usu, new NuevaCampana($campana));
            //     broadcast(new NotificacionEvent($usu));
            // }

            if (isset($variablesMensaje['variables'])) {
                foreach ($variablesMensaje['variables'] as $index => $variable) {
                    $detalleWpp = ContenidoCampana::create([
                        "campana_id" => $campana->id,
                        "numero" => ($index + 1),
                        "valor" => $variable,
                    ]);
                }
            }
            if ($datos['estado'] == Campana::ENVIADO) {
                foreach ($contactosKey as $valor) {
                    $contacto = EtiquetaContacto::with('contacto', 'etiqueta')->find($valor);
                    $respuesta = $this->generarCampana($contacto, $plantilla, $variablesMensaje,  $campana->id);
                }
            }
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se creo correctamente la campaña.',
        ];
    }

    public function generarCampana($etiqueta_contacto, $plantilla, $variables, $idCampana)
    {
        $info['campana_id'] = $idCampana;
        $info['contacto_id'] = $etiqueta_contacto?->contacto?->id ?? null;
        $info['etiqueta_id'] = $etiqueta_contacto?->etiqueta_id ?? null;
        $info['telefono'] = $etiqueta_contacto?->contacto?->telefono ?? null;

        $response = $this->enviarCampana($etiqueta_contacto->contacto, $plantilla, $variables, $idCampana);
        if (!$response || $response->isError()) {
            throw new ErrorException('Error al intentera enviar el mensaje.');
        } else {
            // Suponiendo que tienes el objeto de respuesta almacenado en la variable $response
            if ($response?->body) {
                $data = json_decode($response?->body);
                $messages = $data->messages;
                $messageId = $messages[0]->id;
            }

            $info['wamid'] = $messageId ?? 'Nooo';
            $detalleCampana = DetalleCampana::create($info);
            if (!$detalleCampana) {
                throw new ErrorException("Error al intentar registar el detalle de la campaña.");
            }

            $tipo = 'plantilla';
            $para = $etiqueta_contacto->contacto->telefono;
            $de = $this->phone_number_id;
            $agente = auth()->user()->id;
            $estado = 'sent';
            $contenidoMensaje = $this->contenidoPlantilla($plantilla) ?? 'N/A';
            $mensaje = $contenidoMensaje['BODY']['text'] ?? 'N/A';
            $variablesDetalle = ContenidoCampana::where('campana_id', $idCampana)->get();
            $valores = [];
            foreach ($variablesDetalle as $key => $value) {
                $llave = "{{".($key+1)."}}";
                $valores[$llave] = $value->valor;
                if ($value->valor == 'Nombre') {
                    $valores[$llave] = ($etiqueta_contacto->contacto->nombre_completo ?? 'N/A');
                }
            }

            $mensaje = str_replace(array_keys($valores), array_values($valores), $mensaje);
            $tipo_header = $contenidoMensaje['HEADER']['format'] ?? null;
            $header = 'N/A';
            if ($tipo_header && ($tipo_header == 'VIDEO' || $tipo_header == 'IMAGE')) {
                if ($tipo_header == 'IMAGE') {
                    $header = 'img/whatsapp/' .$variables['file'] ?? 'N/A';
                }
                if ($tipo_header == 'VIDEO') {
                    $header = 'videos/whatsapp/' .$variables['file'] ?? 'N/A';
                }
            } elseif ($tipo_header) {
                $header = $contenidoMensaje['HEADER']['text'] ?? 'N/A';
            }
            $fooder = $contenidoMensaje['FOODER']['text'] ?? 'N/A';

            $idMensaje = $messageId ?? 'Que pasa';
            $mensajeEnviado = Mensaje::create([
                "wamid" => $idMensaje,
                "tipo" => $tipo,
                "de" => $de,
                "para" => $para,
                "mensaje" => $mensaje,
                "header" => $header,
                "fooder" => $fooder,
                "tipo_header" => $tipo_header,
                "estado" => $estado,
                "fecha_envio" => Carbon::now(),
            ]);

            if (!$mensajeEnviado) {
                throw new ErrorException('Error al registrar el mensaje.');
            }
        }
        return true;
    }

    public function enviarCampana($contacto, $plantilla, $info, $idCampana)
    {
        $telefono = $contacto->telefono;
        $components = null;
        $component_header = [];
        $component_body = [];
        $component_buttons = [];
        if ($plantilla) {
            if (isset($plantilla->components) && count($plantilla->components)) {
                foreach ($plantilla->components as $key => $componente) {
                    if ($componente->type == 'HEADER') {
                        if ($componente->format == 'IMAGE') {
                            $component_header = [
                                [
                                    'type' => 'image',
                                    'image' => [
                                        'link' => asset('img/whatsapp/'.$info['file']),
                                    ]
                                ]
                            ];
                        } else if ($componente->format == 'VIDEO') {
                            $component_header = [
                                [
                                    'type' => 'video',
                                    'video' => [
                                        'link' => asset('videos/whatsapp/'.$info['file']),
                                    ]
                                ]
                            ];
                        } else if ($componente->format == 'DOCUMENT') {
                            $component_header = [
                                [
                                    'type' => 'document',
                                    'document' => [
                                        'link' => asset('documentos/whatsapp/'.$info['file']),
                                    ]
                                ]
                            ];
                        }
                    }
                    if ($componente->type == 'BODY') {
                        if (isset($componente->example) && isset($componente->example->body_text) && count($componente->example->body_text[0])) {
                            $variables = [];
                            foreach ($info['variables'] as $index => $variable) {
                                $variable = $variable == 'Nombre' ?  $contacto->nombre_completo : $variable;
                                $variables[$index] = ['type' => 'text', 'text' => $variable];
                            }
                            $component_body = $variables;
                        }
                    }
                    if ($componente->type == 'BUTTONS') {
                        if (property_exists($componente->buttons[0], 'example')) {
                            $component_buttons = [
                                [
                                    'type' => 'button',
                                    'sub_type' => 'url',
                                    'index' => 0,
                                    'parameters' => [
                                        [
                                            "type" => "payload",
                                            "payload" => "WhatsApp/campanas/{$contacto->id}/{$idCampana}/chat"
                                        ]
                                    ]
                                ]
                            ];
                        }
                    }
                }
                $components = new Component($component_header, $component_body, $component_buttons);
            }
    
            if ($plantilla?->name && $plantilla?->language) {
                $response = $this->whatsapp_cloud_api->sendTemplate($telefono, $plantilla->name, $plantilla->language, $components);
                // dd($response?->body ?? 'N/A');
                return $response;
            }
        } else {
            return false;
        }
    }

    public function validarTipoCampana($plantilla)
    {
        $tipo = 'texto';
        if (count($plantilla->components)) {
            foreach ($plantilla->components as $key => $componente) {
                if ($componente->type == 'HEADER') {
                    if ($componente->format == 'IMAGE') {
                        $tipo = 'Imagen';
                    }
                    if ($componente->format == 'VIDEO') {
                        $tipo = 'Video';
                    }
                }
            }
        }

        return $tipo;
    }

    public function contenidoPlantilla($plantilla)
    {
        $info = [];
        if (count($plantilla->components)) {
            $components = $plantilla->components;
            foreach ($components as $index => $component) {
                $info['tipo'] = $component->type;
                if ($index == 0) {
                    $info[$component->type]['text'] = property_exists($component, 'text') ? $component->text : 'N/A';
                    $info[$component->type]['format'] = property_exists($component, 'format') ? $component->format : 'N/A';
                    $info[$component->type]['example'] = 'N/A';
                    if (property_exists($component, 'example') && property_exists($component->example, 'header_handle')) {
                        $info['example'] = $component->example->header_handle[0];
                    }
                } else {
                    $info[$component->type]['text'] = property_exists($component, 'text') ? $component->text : 'N/A';
                    $info[$component->type]['body_text'] = property_exists($component, 'example') ? $component->example->body_text[0]: ['N/A'];
                }
            }
        }
        return $info;
    }
    
    public function envios(Campana $campana)
    {
        $info['campana'] = $campana;
        return view('whatsapp.campanas.detalle', $info);
    }

    public function listadoDetalle(Request $request, Campana $campana)
    {
        // if (!can(Usuario::PERMISO_LISTADO)) {
        //     throw new ErrorException("No tienes permisos para acceder a esta sección.");
        // }
        // dd($campana);

        $detalles = DetalleCampana::with(
            'mensaje',
            'eventos',
            'subLinea',
            'representante',
        )
        ->where('cod_evento', $campana->cod_evento)
        ->orderByDesc('cod_detalle');

        // dd($detalles->get());

        return DataTables::eloquent($detalles)
            ->addColumn("nombre_contacto", function ($model) {
                return $model?->nombre_completo ?? 'N/A';
            })
            ->make(true);
    }

    public function generalLinkChat(Contacto $contacto, $idCampana = null)
    {
        if (isset($idCampana)) {
            $actualizarClick = DetalleCampana::where('campana_id', $idCampana)->where('contacto_id', $contacto->id)->update(['clic_contacto_wpp' => 'X', 'participacion' => 'X']);
            $detalleEv = DetalleCampana::with('campana')->where('campana_id', $idCampana)->where('contacto_id', $contacto->id)->first();
        }

        $campana = Campana::find($idCampana);
        date_default_timezone_set('America/Bogota'); // Establece la zona horaria según tu ubicación
        $hora_actual = date('H'); // Obtiene la hora actual en formato de 24 horas
        if ($hora_actual >= 5 && $hora_actual < 12) {
            $tipoHora = "Buenos días";
        } elseif ($hora_actual >= 12 && $hora_actual < 18) {
            $tipoHora = "Buenas tardes";
        } else {
            $tipoHora = "Buenas noches";
        }
        $contenido_campana = $campana?->descripcion ?? '';
        $nueva_cadena = $contenido_campana;
        if ($campana) {
            $variables = ContenidoCampana::where('campana_id', $campana->id)->get();
            if (count($variables)) {
                $valores = [];
                foreach ($variables as $key => $value) {
                    $llave = "{{".($key+1)."}}";
                    $valores[$llave] = $value->valor;
                    if ($value->valor == 'Nombre') {
                        $valores[$value->valor] = ($contacto->nombre_completo ?? 'N/A');
                    }
                }
                $nueva_cadena = str_replace(array_keys($valores), array_values($valores), $contenido_campana);
            }
        }

        $mensaje = "{$tipoHora} estoy interesado en conocer más sobre esta campaña:\n\n*{$nueva_cadena}*";
        // $mensajeCodificado = urlencode($mensaje);
        // $url = str_replace("amp;", "", "https://api.whatsapp.com/send?phone=+{$agente->telefono}&text={$mensajeCodificado}");
        $info['url'] = 'Jany';
        return view('whatsapp.campanas.vista-chat', $info);
    }

    
    public function cargarMedicos(Request $request)
    {
        $etiquetaIds = array_map('intval', $request->input('etiquetas') ?? []);

        $contactos = [];
        if (count($etiquetaIds)) {
            $contactos = EtiquetaContacto::with('contacto', 'etiqueta')
                ->where('estado', EtiquetaContacto::ACTIVO)
                ->where(function ($query) use($etiquetaIds) {
                    if (count($etiquetaIds)) {
                        $query->whereIn('etiqueta_id', $etiquetaIds);
                    }
                });

            return DataTables::of($contactos)
                ->addColumn("id", "whatsapp.campanas.columnas.check")
                ->rawColumns(["id"])
                ->make(true);
        }   

        return DataTables::of($contactos)
            ->make(true);
    }
}
