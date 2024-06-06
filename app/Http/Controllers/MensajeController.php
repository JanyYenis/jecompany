<?php

namespace App\Http\Controllers;

use App\Events\MensajeSent;
use App\Exceptions\ErrorException;
use App\Models\Mensaje;
use App\Models\Usuario;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index()
    {
        $auth = auth()->user();
        // $usuarios = Usuario::whereNot('id', auth()->user()->id)->get();
        $usuarios = Usuario::selectRaw('usuarios.id as id, usuarios.nombre as nombre, usuarios.email, usuarios.foto, MAX(mensajes.created_at) as fecha')
            ->leftJoin('mensajes', function ($join) {
                $join->on('usuarios.id', '=', 'mensajes.para')
                    ->orOn('usuarios.id', '=', 'mensajes.de');
            })
            // ->where(function($query) use($auth){
            //     $query->where('mensajes.de', $auth->id)
            //         ->orWhere('mensajes.para', $auth->id);
            // })
            ->whereNot('usuarios.id', $auth->id)
            ->groupBy('usuarios.id', 'usuarios.nombre', 'usuarios.email', 'usuarios.foto')
            ->orderByDesc('mensajes.created_at')
            ->get();
        $info['usuarios'] = $usuarios;
        return view('chat.index', $info);
    }

    public function chat(Request $request, Usuario $contacto)
    {
        $usuario = auth()->user();
        $mensajes = Mensaje::with('deU', 'paraU')
            ->where(function($query) use($usuario){
                $query->where('de', $usuario->id)
                ->orWhere('para', $usuario->id);
            })
            ->where(function($query) use($contacto){
                $query->where('de', $contacto->id)
                ->orWhere('para', $contacto->id);
            })
            ->where('estado', Mensaje::ACTIVO)
            ->get();
        
        $info['mensajes'] = $mensajes;
        $info['contacto'] = $contacto;
        return [
            'estado' => 'success',
            // 'mensaje' => 'Se marcaron todas las notificaciones como leido.',
            'html' => view('chat.chat', $info)->render(),
        ];
    }

    public function store(Request $request)
    {
        $usuario = auth()->user();
        $contacto = Usuario::find($request->input('id'));
        $datos['contenido'] = $request->input('mensaje');
        $datos['de'] = $usuario->id;
        $datos['para'] = $contacto->id;
        if ($request->get('imagen')) {
            $data = $request->get('imagen');
            $data = str_replace('data:image/png;base64,', '', $data);
            $data = str_replace(' ', '+', $data);
            $data = base64_decode($data);
            $nombreImagen = time() . '.png';
            $rutaImagen = public_path('img/chats/' . $nombreImagen);

            file_put_contents($rutaImagen, $data);
            $datos['multimedia'] = 'img/chats/' . $nombreImagen;
            $datos['tipo'] = Mensaje::IMAGEN;
        }

        $mensaje = Mensaje::create($datos);
        
        if (!$mensaje) {
            throw new ErrorException("Error al intentar enviar el mensaje.");
        }

        broadcast(new MensajeSent($mensaje))->toOthers();
        
        $mensajes = Mensaje::with('deU', 'paraU')
            ->where(function($query) use($usuario){
                $query->where('de', $usuario->id)
                ->orWhere('para', $usuario->id);
            })
            ->where(function($query) use($contacto){
                $query->where('de', $contacto->id)
                ->orWhere('para', $contacto->id);
            })
            ->where('estado', Mensaje::ACTIVO)
            ->get();
        
        $info['mensajes'] = $mensajes;
        
        return [
            'estado' => 'success',
            'html' => view('chat.mensaje', $info)->render(),
        ];
    }
}
