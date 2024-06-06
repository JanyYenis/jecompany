<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Exceptions\ErrorException;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PlantillaController extends Controller
{
    const NO_ELIMINAR = [
        'hello_world',
        'chat_bot'
    ];
    const NO_EDITAR = [
        'hello_world',
        'chat_bot'
    ];
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info['numeroTel'] = $this?->numeroG ?? '573152094191';
        // return view('whatsapp.plantillas.index', $info);
        return view('whatsapp::plantillas.index', $info);
    }
    
    public function listado($validar = false)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$this->waba_id}/message_templates";
        if ($validar) {
            $url = "https://graph.facebook.com/{$this->version}/{$this->waba_id}/message_templates?status=APPROVED";
        }
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $obj = json_decode($response);

        // Acceder a los datos del objeto
        $datos = $obj?->data ?? [];
        $info = [];
        $cont = 1;
        foreach ($datos as $key => $dato) {
            // var_dump($dato);
            // echo "<br><br>";
            $info[$key]['cantidad'] = $cont;
            $info[$key]['id'] = $dato->id;
            $info[$key]['category'] = $dato->category;
            $info[$key]['language'] = $dato->language;
            $info[$key]['status'] = $dato->status;
            $info[$key]['name'] = $dato->name;
            $components = $dato->components;
            // Imprimir el resultado
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
            // var_dump($info[$key]);
            // echo "<br><br>------------------------------------------------------------------------------------<br>";
        }

        // dd($info);
        return $info;
    }

    public function listadoPlantilla()
    {
        $data = $this->listado();

        return DataTables::of($data)
            ->addColumn("action", function($model){
                $info['model'] = $model;
                $info['puedeEditar'] = true;
                if (in_array($model['name'], self::NO_EDITAR) || $model['status'] != 'APPROVED') {
                    $info['puedeEditar'] = false;
                }
                $info['puedeEliminar'] = in_array($model['name'], self::NO_ELIMINAR) ? false : true;
                return view("whatsapp::plantillas.columnas.acciones", $info);
            })
            ->rawColumns(["action"])
            ->make(true);
    }
    
    public function show($id)
    {
        $info = $this->validarCampos($id);
        $info['numeroTel'] = $this->numeroG;

        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Datos cargados correctamente";
        $respuesta['html'] = view("whatsapp::plantillas.modals.cel", $info)->render();
    
        return response()->json($respuesta);
    }
    
    public function validarCampos($id_plantilla)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$id_plantilla}";
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $plantilla = json_decode($response);
        $info['header'] = null;
        $info['header_contenido'] = null;
        $info['body'] = null;
        $info['contenido'] = null;
        $info['boton'] = null;
        $info['boton_url'] = null;
        if (count($plantilla->components)) {
            // dd($plantilla->components);
            foreach ($plantilla->components as $key => $componente) {
                if ($componente->type == 'HEADER') {
                    $info['header'] = $componente->format;
                    if (property_exists($componente, 'example') && property_exists($componente->example, 'header_handle')) {
                        $info['header_contenido'] = $componente->example->header_handle[0];
                    }
                }
                if ($componente->type == 'BODY') {
                    if (isset($componente->example) && isset($componente->example->body_text)) {
                        $info['body'] = count($componente->example->body_text[0]);
                    }
                }
                if ($componente->type == 'BUTTONS') {
                    if (isset($componente->buttons) && isset($componente->buttons[0]->text)) {
                        $info['boton'] = $componente->buttons[0]->text;
                        $info['boton_url'] = $componente->buttons[0]->url;
                    }
                }
            }
            $info['contenido'] = $this->generalTextoplantilla($plantilla);
        }

        // dd($info);
        return $info;
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
        $nombre = $request->input('nombre');
        $tipo_encabezado = $request->input('tipo_encabezado') ?? null;
        $texto_encabzado = $request->input('texto_encabzado') ?? null;
        $boton = $request->input('boton') ?? null;
        $multimedia = $request->input('multimedia') ?? 1;
        $contenido = $request->input('contenido') ?? '';
        $archivo = $request->file('archivo');
        
        if ($request->input('variables')) {
            $variablesMensaje = $request->input('variables');
        }
        $info = [];
        if ($tipo_encabezado) {
            if ($tipo_encabezado == 1) {
                $info[] = json_encode([
                    "type" => "HEADER",
                    "format" => 'TEXT',
                    "text" => $texto_encabzado
                ]);
            } else {
                $tipo = 'IMAGE';
                if ($multimedia == 1) {
                    $tipo = 'IMAGE';
                } elseif ($multimedia == 2) {
                    $tipo = 'VIDEO';
                } else {
                    $tipo = 'DOCUMENT';
                }
    
                if ($archivo) {
                    // dd($archivo);
                    $nombreOriginal = time().'.'.($archivo->getClientOriginalExtension() ?? '.png');
                    $mimeType = $archivo->getMimeType();
        
                    $urlArchivo = 'img/pantillas/whatsapp';
                    if ($mimeType == 'application/pdf') {
                        $urlArchivo = 'documentos/pantillas/whatsapp';
                    }
                    if ($mimeType == 'video/mp4') {
                       $urlArchivo = 'videos/pantillas/whatsapp';
                    }
        
                    // if(move_uploaded_file($rutaTemporal, $rutaDestino)) {
                    if($archivo->move(public_path($urlArchivo), $nombreOriginal)) {
                        $infoArchivo = $this->generarSeccionSubirArchivo($urlArchivo.'/'.$nombreOriginal);

                        $info[] = json_encode([
                            "type" => "HEADER",
                            "format" => $tipo,
                            "example" => json_encode([
                                "header_handle" => [
                                    $infoArchivo
                                ]
                            ])
                        ]);
                    }
    
                }
            }
        }

        $datos = [
            "type" => "BODY",
            "text" => $contenido,
        ];
        if (isset($variablesMensaje)) {
            $datos["example"] = json_encode([
                "body_text" => [
                    $variablesMensaje
                ]
            ]);
        }
        $info[] = json_encode($datos);

        if ($boton) {
            if ($boton == 1) {
                $url = '';
                // Verificar si el string comienza con "https://"
                if (strpos($request->input('url'), "https://") === 0) {
                    $url = $request->input('url');
                } 
                // Verificar si el string comienza con "http://"
                elseif (strpos($request->input('url'), "http://") === 0) {
                    $url = $request->input('url');
                } 
                // Si no contiene ninguno de los dos, agregar "https://"
                else {
                    $url = "https://" . $request->input('url');
                }

                $datosBoton = json_encode([
                    "type" => "URL",
                    "text" => "Sitio Web",
                    "url" => $url,
                ]);
            } else {
                $datosBoton = json_encode([
                    "type" => "URL",
                    "text" => "Contacte a su visitador",
                    "url" => "https://whatsking.k2digital.co/{{1}}",
                    "example" => [
                        "https://whatsking.k2digital.co/Campana/generalLinkChat/573152094191"
                    ]
                ]);
            }
            
            $info[] = json_encode([
                "type" => "BUTTONS",
                "buttons" => [
                    $datosBoton
                ]
            ]);
        }
        

        $info = json_encode($info);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://graph.facebook.com/{$this->version}/{$this->waba_id}/message_templates",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>"{
            'name': '$nombre',
            'language': 'es_ES',
            'category': 'MARKETING',
            'components': $info
        }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer {$this->token}"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return [
            'estado' => 'success',
            'mensaje' => 'Se creo correctamente la plantilla.',
        ];
    }

    public function generarSeccionSubirArchivo($urlArchivo)
    {
        $bytes = filesize($urlArchivo);
        $headers = get_headers(asset($urlArchivo), 1);
        
        if (isset($headers['Content-Type'])) {
            $tipo_de_archivo = $headers['Content-Type'];
        } else {
            throw new ErrorException('No se pudo determinar el tipo de archivo.');
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://graph.facebook.com/{$this->version}/{$this->app_id}/uploads?file_length={$bytes}&file_type={$tipo_de_archivo}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer {$this->token}"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // Decodificar el JSON
        $data = json_decode($response, true);

        // Verificar si la decodificación fue exitosa
        $info = null;
        if (count($data)) {
            // Acceder al valor de la clave 'id'
            $id = $data['id'];
            $info = $this->subirArchivo($urlArchivo, $tipo_de_archivo, $id);
        }

        return $info;
    }

    public function subirArchivo($urlArchivo, $tipo_de_archivo, $seccion)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$seccion}"; // Facebook Upload URL
        $filePath = asset($urlArchivo); // Local File Path
        $fileOffset = 0; // Set the file offset
        $archivo = file_get_contents($filePath);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $archivo,
            CURLOPT_HTTPHEADER => [
                "Authorization: OAuth {$this->token}",
                "file_offset: " . $fileOffset,
                "Content-Type: {$tipo_de_archivo}",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);
        return $data['h'];
    }

    public function edit($plantilla)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$plantilla}";
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $plantilla = json_decode($response);
        $info['id'] = $plantilla->id;
        $info['category'] = $plantilla->category;
        $info['language'] = $plantilla->language;
        $info['status'] = $plantilla->status;
        $info['name'] = $plantilla->name;
        $info['header'] = null;
        $info['header_contenido'] = null;
        $info['body'] = null;
        $info['contenido'] = null;
        $info['boton'] = null;
        $info['boton_url'] = null;
        if (count($plantilla->components)) {
            // dd($plantilla->components);
            foreach ($plantilla->components as $key => $componente) {
                if ($componente->type == 'HEADER') {
                    $info['header'] = $componente->format;
                    if (property_exists($componente, 'example') && property_exists($componente->example, 'header_handle')) {
                        $info['header_contenido'] = $componente->example->header_handle[0];
                    }
                }
                if ($componente->type == 'BODY') {
                    if (isset($componente->example) && isset($componente->example->body_text)) {
                        $info['body'] = count($componente->example->body_text[0]);
                    }
                }
                if ($componente->type == 'BUTTONS') {
                    if (isset($componente->buttons) && isset($componente->buttons[0]->text)) {
                        $info['boton'] = $componente->buttons[0]->text;
                        $info['boton_url'] = $componente->buttons[0]->url;
                    }
                }
            }
            $info['contenido'] = $this->generalTextoplantilla($plantilla);
        }

        // dd($info);
        $info['numeroTel'] = $this->numeroG;

        $respuesta["estado"] = "success";
        $respuesta["mensaje"] = "Datos cargados correctamente";
        $respuesta['html'] = view("whatsapp.plantillas.modals.editar", $info)->render();
    
        return response()->json($respuesta);
    }

    public function update(Request $request, $plantilla)
    {
        $nombre = $request->input('nombre');
        $tipo_encabezado = $request->input('tipo_encabezado') ?? null;
        $texto_encabzado = $request->input('texto_encabzado') ?? null;
        $boton = $request->input('boton') ?? null;
        $multimedia = $request->input('multimedia') ?? 1;
        $contenido = $request->input('contenido') ?? '';
        $archivo = $request->file('archivo');
        
        if ($request->input('variables')) {
            $variablesMensaje = $request->input('variables');
        }
        $info = [];
        if ($tipo_encabezado) {
            // dd($tipo_encabezado);
            if ($tipo_encabezado == 1) {
                $info[] = json_encode([
                    "type" => "HEADER",
                    "format" => 'TEXT',
                    "text" => $texto_encabzado
                ]);
            } else {
                $tipo = 'IMAGE';
                if ($multimedia == 1) {
                    $tipo = 'IMAGE';
                } elseif ($multimedia == 2) {
                    $tipo = 'VIDEO';
                } else {
                    $tipo = 'DOCUMENT';
                }
    
                if ($archivo) {
                    // dd($archivo);
                    $nombreOriginal = time().'.'.($archivo->getClientOriginalExtension() ?? '.png');
                    $mimeType = $archivo->getMimeType();
        
                    $urlArchivo = 'img/bausch';
                    if ($mimeType == 'application/pdf') {
                        $urlArchivo = 'documentos/bausch';
                    }
                    if ($mimeType == 'video/mp4') {
                       $urlArchivo = 'videos/bausch';
                    }
        
                    // if(move_uploaded_file($rutaTemporal, $rutaDestino)) {
                    if($archivo->move(public_path($urlArchivo), $nombreOriginal)) {
                        $infoArchivo = $this->generarSeccionSubirArchivo($urlArchivo.'/'.$nombreOriginal);

                        $info[] = json_encode([
                            "type" => "HEADER",
                            "format" => $tipo,
                            "example" => json_encode([
                                "header_handle" => [
                                    $infoArchivo
                                ]
                            ])
                        ]);
                    }
    
                }
            }
        }

        $datos = [
            "type" => "BODY",
            "text" => $contenido,
        ];
        if (isset($variablesMensaje)) {
            $datos["example"] = json_encode([
                "body_text" => [
                    $variablesMensaje
                ]
            ]);
        }
        $info[] = json_encode($datos);

        if ($boton) {
            if ($boton == 1) {
                $url = '';
                // Verificar si el string comienza con "https://"
                if (strpos($request->input('url'), "https://") === 0) {
                    $url = $request->input('url');
                } 
                // Verificar si el string comienza con "http://"
                elseif (strpos($request->input('url'), "http://") === 0) {
                    $url = $request->input('url');
                } 
                // Si no contiene ninguno de los dos, agregar "https://"
                else {
                    $url = "https://" . $request->input('url');
                }

                $datosBoton = json_encode([
                    "type" => "URL",
                    "text" => "Sitio Web",
                    "url" => $url,
                ]);
            } else {
                $datosBoton = json_encode([
                    "type" => "URL",
                    "text" => "Contacte a su visitador",
                    "url" => "https://whatsking.k2digital.co/{{1}}",
                    "example" => [
                        "https://whatsking.k2digital.co/Campana/generalLinkChat/573152094191"
                    ]
                ]);
            }
            
            $info[] = json_encode([
                "type" => "BUTTONS",
                "buttons" => [
                    $datosBoton
                ]
            ]);
        }
        

        $info = json_encode($info);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://graph.facebook.com/{$this->version}/{$plantilla}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>"{
            'name': '$nombre',
            'language': 'es_ES',
            'category': 'MARKETING',
            'components': $info
        }",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            "Authorization: Bearer {$this->token}"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function destroy($plantilla)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$plantilla}";
        $metodo = 'GET';
        $response = $this->ejecutar($url, $metodo, $this->token);
        $plantilla1 = json_decode($response);
        $name = $plantilla1->name;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://graph.facebook.com/{$this->version}/{$this->waba_id}/message_templates?hsm_id={$plantilla}&name={$name}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer {$this->token}"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        if (isset(json_decode($response)->error)) {
            throw new ErrorException('Error al intentar eliminar la plantilla.');
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se elimino la plantilla correctamente.',
        ];
    }
}
