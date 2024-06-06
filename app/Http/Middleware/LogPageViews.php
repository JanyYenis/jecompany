<?php

namespace App\Http\Middleware;

use App\Models\Sistema\ActividadUsuario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogPageViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Obtiene la hora actual
        $startTime = microtime(true);

        // Procesa la solicitud
        $response = $next($request);

        // Calcula el tiempo transcurrido
        $endTime = microtime(true);
        $duration = round($endTime - $startTime, 5); // Duración en segundos, redondeado a 5 decimales

        // Registra la página visitada
        ActividadUsuario::create([
            'cod_usuario' => auth()->user()->id,
            'url' => $request->fullUrl(),
            'duracion' => $duration,
        ]);
        // Log::info('Usuario accedió a: ' . $request->fullUrl());
        
        return $response;
    }
}
