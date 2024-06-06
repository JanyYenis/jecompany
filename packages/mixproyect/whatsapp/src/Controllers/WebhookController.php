<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Models\Config;
use App\Models\FarmaD\Contacto;
use App\Models\FarmaD\EventoDetalle;
use App\Models\FarmaD\Mensaje;
use App\Models\FarmaD\Representante;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Netflie\WhatsAppCloudApi\WebHook;
use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class WebhookController extends Controller
{
    public function webhook(Request $request)
    {
        try {
            $token = 'whats_king_farma_de_colombia_Token';
            $query = $request->query();

            $mode = $query['hub_mode'];
            $palabraReto = $query['hub_challenge'];
            $tokenVerificacion = $query['hub_verify_token'];

            if ($mode && $tokenVerificacion) {
                if ($mode === 'subscribe' && $token == $tokenVerificacion) {
                    return response($palabraReto, 200)->header('Content-Type', 'text/plain');
                }
            }

            throw new Exception("Peticion invalida");
            
        } catch (Exception $e) {
            return response()->json([
                'estado' => 'error',
                'mensaje' => $e->getMessage(),
            ], 500);
        }
    }

    public function acctionWebhook(Request $request)
    {
        try {
            $bodyContent = json_decode($request->getContent(), true);
            $datos = $bodyContent['entry'][0]['changes'][0]['value'];
            if (array_key_exists('messages', $datos)) {
                $tipo = $datos['messages'][0]['type'] ?? 'text';
                $para = $datos['messages'][0]['from'] ?? '00000';
                $idMensaje = $datos['messages'][0]['id'] ?? '--';
                $de = $datos['metadata']['phone_number_id'];
                $estado = $datos['statuses'][0]['status'] ?? 'sent';
                if ($tipo == 'text') {
                    $mensaje = $datos['messages'][0]['text']['body'] ?? 'jajjajaj';
                    $header = 'N/A';
                    $tipo_header = 'N/A';
                } elseif ($tipo == 'image') {
                    $tipo = 'imagen';
                    $idImagen = $datos['messages'][0]['image']['id'] ?? 'N/A';
                    $header = $idImagen;
                    if ($idImagen && $idImagen != 'N/A') {
                        $response1 = $this->whatsapp_cloud_api->downloadMedia($idImagen);
                        foreach ($response1 as $property => $res) {
                            if ($property == 'body') {
                                $imagen = imagecreatefromstring($res);
                                if ($imagen !== false) {
                                    $nombreImagen = 'imagen_'.time().'.jpg';
                                    $rutaGuardar = public_path('img/campana/farma-d').$nombreImagen;

                                    // Guardar la imagen en un archivo (en este caso, formato JPEG)
                                    if (imagejpeg($imagen, $rutaGuardar)) {
                                        $header = public_path('img/campana/farma-d').$nombreImagen;
                                    }
                                    imagedestroy($imagen);
                                }
                            }
                        }
                    }
                    $mensaje = $datos['messages'][0]['image']['caption'] ?? 'N/A';
                    $tipo_header = 'IMAGE';
                } elseif ($tipo == 'video') {
                    $mensaje = $datos['messages'][0]['video']['caption'] ?? 'N/A';
                    $header = 'N/A';
                    $idVideo = $datos['messages'][0]['video']['id'] ?? 'N/A';
                    $response1 = $this->whatsapp_cloud_api->downloadMedia($idVideo);
                    foreach ($response1 as $property => $value) {
                        if ($property == 'body') {
                            $nombreVideo = 'video_'.time().'.mp4';
                            $rutaGuardar = public_path('videos/farma-d').$nombreVideo;
            
                            // Guardar el video en un archivo (en este caso, formato MP4)
                            if (file_put_contents($rutaGuardar, $value)) {
                                $header = public_path('videos/farma-d').$nombreVideo;
                            }
                        }
                    }
                    $tipo_header = 'VIDEO';
                } elseif ($tipo == 'document') {
                    $tipo = 'documento';
                    $mensaje = $datos['messages'][0]['document']['caption'] ?? 'N/A';
                    $header = $datos['messages'][0]['document']['id'] ?? 'N/A';
                    $tipo_header = 'DOCUMENT';
                } elseif ($tipo == 'audio') {
                    $tipo = 'audio';
                    $mensaje = $datos['messages'][0]['audio']['id'] ?? 'N/A';
                    $idImagen = $datos['messages'][0]['image']['id'] ?? 'N/A';
                    // $header = $idImagen;
                    $header = 'N/A';
                    $tipo_header = 'N/A';
                } elseif ($tipo == 'interactive' || $tipo == 'text') {
                    $mensaje = $datos['button_reply'][0]['id'] ?? 'error';
                    $header = 'N/A';
                    $tipo_header = 'N/A';
                    // $this->chatBot($para, $mensaje);
                }
                
                $agente = 1;
                
                $mensaje = Mensaje::create([
                    "id_mensaje" => $idMensaje,
                    "tipo" => $tipo,
                    "de" => $para,
                    "para" => $de,
                    "mensaje" => $mensaje,
                    "header" => $header,
                    "tipo_header" => $tipo_header,
                    "estado" => $estado,
                    "fecha_envio" => Carbon::now(),
                    "id_agente" => $agente,
                ]);
                EventoDetalle::where('wamid', $idMensaje)->update(['participacion' => 'X']);
                $this->chatBot($para);
            }

            if (array_key_exists('statuses', $datos)) {
                $tipo = 'text';
                $para = $datos['statuses'][0]['recipient_id'] ?? '111';
                $de = $datos['metadata']['display_phone_number'];
                $mensaje = $respuesta['entry'][0]['changes'][0]['field'] ?? 'James';
                $agente = 1;
                $idMensaje = $datos['statuses'][0]['id'] ?? 'Que pasa';
                $estado = $datos['statuses'][0]['status'] ?? 'sent';

                $validarMensajeEnviado = Mensaje::firstWhere('id_mensaje', $idMensaje);
                if ($validarMensajeEnviado) {
                    $actualizarvalidarMensajeEnviado = $validarMensajeEnviado->update(["estado" => $estado]);
                } else {
                    if (isset($respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'])) {
                        $mensaje = $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'] ?? 'James';
                    }
                    $validarMensajeEnviado = Mensaje::updateOrCreate([
                        'id_mensaje' => $idMensaje
                    ],[
                        "tipo" => $tipo,
                        "de" => $de,
                        "para" => $para,
                        "mensaje" => $mensaje,
                        "estado" => $estado,
                        "fecha_envio" => Carbon::now(),
                        "id_agente" => $agente,
                    ]);
                }

                // -------------------------------------------------------------------------------------------
                
                if ($estado == 'read') {
                    EventoDetalle::where('wamid', $idMensaje)->update(['participacion' => 'X']);
                }

            }
            
        } catch (Exception $e) {
            return response()->json([
                'estado' => 'error',
                'mensaje' => $e->getMessage(),
            ], 500);
        }
    }

    public function chatBot($telefono, $valor = null)
    {
        $header = 'N/A';
        $fooder = 'N/A';
        $tipo_header = 'N/A';
        $tipo = 'plantilla';

        $contacto = Contacto::with('subLineaActivo')->firstWhere('movil_1', $telefono);
        $config = Config::where('estado', Config::ACTIVO)->where('id', 6)->first();
        $whatsapp_cloud_api = new WhatsAppCloudApi([
            'from_phone_number_id' => $config->phone_number_id,
            'access_token' => $config->token,
            'graph_version' => $config->version,
        ]);
        if ($contacto) {
            $agente = Representante::firstWhere('sub_linea_id', $contacto->subLineaActivo->sub_linea_id);
            # Plantillas
            $component_header = [];
            $component_body = [
                [
                    'type' => 'text',
                    'text' => $contacto->nombre_completo,
                ],
                [
                    'type' => 'text',
                    'text' => $agente->nombre_completo,
                ]
            ];
            $component_buttons = [
                [
                    'type' => 'button',
                    'sub_type' => 'url',
                    'index' => 0,
                    'parameters' => [
                        [
                            "type" => "payload",
                            "payload" => "farma-de-colombia/campanas/{$agente->telefono}/{$telefono}/chat"
                        ]
                    ]
                ]
            ];
            $components = new Component($component_header, $component_body, $component_buttons);
            $response = $whatsapp_cloud_api->sendTemplate($telefono, 'chat_bot', 'es_ES', $components);
            $url = "https://graph.facebook.com/{$config->version}/{$config->waba_id}/message_templates?name=chat_bot";
            $metodo = 'GET';
            $response1 = $this->ejecutar($url, $metodo, $config->token);
            $plantilla = json_decode($response1);
            // var_dump($plantilla->data);
            $mensaje = $this->generalTextoplantilla($plantilla->data[0]);
            $valores_a_reemplazar = [
                '{{1}}' => $contacto->nombre_completo,
                '{{2}}' => $agente->nombre_completo,
            ];
            
            $mensaje = str_replace(array_keys($valores_a_reemplazar), array_values($valores_a_reemplazar), $mensaje);
        } else {
            $mensaje  = "Hola pronto nos comunicaremos contigo.";
            $response = $whatsapp_cloud_api->sendTextMessage($telefono, $mensaje);
        }
        
        if ($response->isError()) {
            echo 'Error sending message: ' . $response->getErrorMessage();
        }
        $modeloMesanje = new Mensaje();
        $para = $telefono;
        $de = $config->phone_number_id;
        $agente = $_SESSION['idUser'];
        $estado = 'sent';
        foreach ($response as $property => $value) {
            if ($property == 'body') {
                $data = json_decode($value);
                $messages = $data->messages;
                $messageId = $messages[0]->id;
            }
        }

        $idMensaje = $messageId ?? 'Que pasa';
        $modeloMesanje->store([$tipo, $de, $para, $mensaje, $idMensaje, $agente, $estado, $header, $fooder, $tipo_header]);
    }
}
