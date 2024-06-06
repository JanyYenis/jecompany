<?php

namespace App\Http\Controllers;

use App\Exceptions\ErrorException;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Pais;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FALaravel\Facade as Google2FA;
use Yajra\DataTables\Facades\DataTables;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!can(Usuario::PERMISO_LISTADO)) {
            throw new ErrorException("No tienes permisos para acceder a esta sección.");
        }
        
        return view('usuarios.index');
    }

    public function listado(Request $request)
    {
        if (!can(Usuario::PERMISO_LISTADO)) {
            throw new ErrorException("No tienes permisos para acceder a esta sección.");
        }

        $usuarios = Usuario::with(
            'infoEstado',
            'infoDocumento',
            'infoGenero',
        );

        return DataTables::eloquent($usuarios)
            ->addColumn("nombreCompleto", function ($model) {
                return view("usuarios.foto", $model);
            })
            ->addColumn("telefono", function ($model) {
                return $model?->numero_completo ?? "N/A";
            })
            ->addColumn("genero", function ($model) {
                return $model?->infoGenero?->nombre ?? "N/A";
            })
            ->addColumn("tipo_documento", function ($model) {
                return $model?->infoDocumento?->nombre_corto ?? "N/A";
            })
            ->addColumn("identificacion", function ($model) {
                return $model?->identificacion ?? "N/A";
            })
            ->addColumn("id_ciudad", function ($model) {
                return $model?->ciudad?->nombre ?? "N/A";
            })
            ->addColumn("estado", function ($model) {
                $info['concepto'] = $model?->infoEstado;
                return view("sistema.estado", $info);
            })
            ->addColumn("action", "usuarios.columnas.acciones")
            ->rawColumns(["action"])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Usuario $usuario)
    {
        if (!can(Usuario::PERMISO_EDITAR) && auth()->user()->id != $usuario->id) {
            throw new ErrorException("No tienes permisos para acceder a esta sección.");
        }

        $paises = Pais::where('estado', 1)->get();
        $tipoGenero = Usuario::darTipoGenero();
        $tipoDocumento = Usuario::darTipoDocumento();
        $info['usuario'] = $usuario;
        $info['paises'] = $paises;
        $info['generos'] = $tipoGenero?->conceptosActivos;
        $info['tipos_documentos'] = $tipoDocumento?->conceptosActivos;

        if (!$usuario->google2fa_secret) {
            $google2fa = app('pragmarx.google2fa');
            $google2fa_secret = $google2fa->generateSecretKey();
      
            $QR_Image = $google2fa->getQRCodeInline(
                config('app.name'),
                $usuario->email,
                $google2fa_secret
            );
        }

        $info['qr'] = $QR_Image ?? null;
        $info['secret'] = $google2fa_secret ?? null;

        return view('usuarios.editar', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        if (!can(Usuario::PERMISO_EDITAR) && auth()->user()->id != $usuario->id) {
            throw new ErrorException("No tienes permisos para acceder a esta sección.");
        }

        // dd($request->all(), $usuario);
        $datos = $request->all();
        if (array_key_exists('google2fa_secret', $datos)) {
            $datos['google2fa_secret'] = $datos['google2fa_secret'] == 'null' ? null : $datos['google2fa_secret'];
        }
        $actualizar = $usuario->update($datos);

        if (!$actualizar) {
            throw new ErrorException("No se ha actualizado la información.");
        }


        return [
            "estado" => "success",
            "mensaje" => "Se ha actualizado la información correctamente.",
        ];
    }

    public function guardarImagen(Request $request)
    {
        $image = $request->file('avatar');

        // dd($image, $request->hasFile('image'));
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/perfil'), $imageName);
            $datos['foto'] = 'img/perfil/'.$imageName;
            $usuario = Usuario::find($request->input('id'));
            if (count($datos)) {
                $actualizar = $usuario->update($datos);
                if (!$actualizar) {
                    throw new ErrorException("No se ha actualizado la imagen.");
                }
            }
        }

        return [
            "estado" => "success",
            "mensaje" => "Se ha actualizado la información correctamente.",
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function actualizarEmail(Request $request, Usuario $usuario)
    {
        $email = $request->input('emailaddress');
        $password = $request->input('confirmemailpassword');

        if ($usuario && Hash::check($password, $usuario->password)) {
            $actualizar = $usuario->update([
                'email' => $email
            ]);

            if (!$actualizar) {
                throw new ErrorException("Error al intentar actualizar el correo.");
            }
        } else {
            throw new ErrorException("Su contraseña es incorrecta.");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se actualizo correctamente su contraseña',
        ];
    
    }
    
    public function actualizarContrasena(Request $request, Usuario $usuario)
    {
        $password = $request->input('currentpassword');
        $newpassword = $request->input('newpassword');

        if ($usuario && Hash::check($password, $usuario->password)) {
            $actualizar = $usuario->update([
                'password' => Hash::make($newpassword)
            ]);

            if (!$actualizar) {
                throw new ErrorException("Error al intentar actualizar la contraseña.");
            }
        } else {
            throw new ErrorException("Su contraseña es incorrecta.");
        }

        return [
            'estado' => 'success',
            'mensaje' => 'Se actualizo correctamente su contraseña',
        ];
    }

    public function verify2FA(Request $request)
    {
        $secret = $request->input('secret');
        $code = $request->input('code');

        $valid = Google2FA::verifyKey($secret, $code);

        if (!$valid) {
            throw new ErrorException("El código es incorrecto.");
        }

        Usuario::find(auth()->user()->id)->update(['google2fa_secret' => $secret]);

        return [
            'estado' => 'success',
            'mensaje' => 'Se activo correctamente la autenticaón de dos factores.',
        ];
    }
}
