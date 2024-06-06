<?php

namespace App\Http\Controllers\Sistema;

use App\Exceptions\ErrorException;
use App\Http\Controllers\Controller;
use App\Models\Sistema\Acceso;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class AccesoController extends Controller
{
    public function listado()
    {
        $accesos = Acceso::with(
            'infoEstado',
            'usuario',
            'infoTipo',
        )
        ->orderByDesc('created_at');

        return DataTables::eloquent($accesos)
            ->addColumn("tiempo", function($model) {
                return $model?->estado != Acceso::ERROR ? calcularDiferenciasFechas($model?->fecha_ingreso, $model?->fecha_salida) : 'N/A';
            })
            ->make(true);
    }

    public function resumen(Request $request)
    {
        $fechaActual = Carbon::now();
        // Calcular la fecha y hora hace 12 horas
        $twelveHoursAgo = $fechaActual->copy()->subHours(12);

        $adminRoleId = Role::where('name', Usuario::ROL_ADMINISTRADOR)->first()->id;
        $superAdminRoleId = Role::where('name', Usuario::ROL_SUPER_ADMINISTRADOR)->first()->id;

        $adminUserIds = DB::table('model_has_roles')
            ->whereIn('role_id', [$adminRoleId, $superAdminRoleId])
            ->pluck('model_id');

        // Consultar los registros de acceso en las últimas 12 horas
        $info['accesosDoceHoras'] = Acceso::whereBetween('fecha_ingreso', [$twelveHoursAgo, $fechaActual])
            ->whereNot('estado', Acceso::ERROR)
            ->count();
        $info['accesosDoceHorasAdmins'] = Acceso::whereIn('cod_usuario', $adminUserIds)
            ->whereBetween('fecha_ingreso', [$twelveHoursAgo, $fechaActual])
            ->count();
        $info['accesosDoceHorasFallidos'] = Acceso::where('estado', Acceso::ERROR)
            ->whereBetween('fecha_ingreso', [$twelveHoursAgo, $fechaActual])
            ->count();
        $info['accesosHoy'] = Acceso::whereDate('fecha_ingreso', $fechaActual)
            ->whereNot('estado', Acceso::ERROR)
            ->count();
        $info['accesosHoyAdmins'] = Acceso::whereIn('cod_usuario', $adminUserIds)
            ->whereDate('fecha_ingreso', $fechaActual)
            ->count();
        $info['accesosHoyFallidos'] = Acceso::where('estado', Acceso::ERROR)
            ->whereDate('fecha_ingreso', $fechaActual)
            ->count();

        return response()->json([
            'estado' => 'success',
            'mensaje' => 'Se cargo la información correctamente.',
            'accesosDoceHoras' => $info['accesosDoceHoras'],
            'accesosDoceHorasAdmins' => $info['accesosDoceHorasAdmins'],
            'accesosDoceHorasFallidos' => $info['accesosDoceHorasFallidos'],
            'accesosHoy' => $info['accesosHoy'],
            'accesosHoyAdmins' => $info['accesosHoyAdmins'],
            'accesosHoyFallidos' => $info['accesosHoyFallidos'],
        ]);
    }

    public function marcarSalida(Request $request, Usuario $usuario)
    {
        $salida = Acceso::where('cod_usuario', $usuario?->id)
            ->where('fecha_salida', null)
            ->update([
                'fecha_salida' => Carbon::now(),
                'estado' => Acceso::SESION_FINALIZADA
            ]);

        // if (!$salida) {
        //     throw new ErrorException("Error al marcar la salida.");
        // }

        return [
            'estado' => 'success'
        ];
    }
}
