<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('chats')
                ->as("chats.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/chats/principal.php'));
            
            Route::prefix('calendario')
                ->as("calendario.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/calendario/principal.php'));

            Route::prefix('usuarios')
                ->as("usuarios.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/usuarios/principal.php'));

            Route::prefix('hoja-de-vida')
                ->as("hoja-de-vida.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/hoja-de-vida/principal.php'));

            Route::prefix('paises')
                ->as("paises.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/paises/principal.php'));

            Route::prefix('ciudades')
                ->as("ciudades.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/ciudades/principal.php'));

            Route::prefix('roles')
                ->as("roles.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/sistema/roles.php'));

            Route::prefix('notificaciones')
                ->as("notificaciones.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/sistema/notificaciones.php'));

            // Route::prefix('WhatsApp')
            //     ->as("whatsapp.")
            //     ->middleware(['web', 'auth'])
            //     ->group(base_path('routes/whatsapp/principal.php'));

            Route::prefix('Keenthemes')
                ->as("keenthemes.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/keenthemes/principal.php'));

            Route::prefix('accesos')
                ->as("accesos.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/sistema/accesos.php'));

            Route::prefix('tareas')
                ->as("tareas.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/tareas/principal.php'));

            Route::prefix('proyectos')
                ->as("proyectos.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/proyectos/principal.php'));

            Route::prefix('qr')
                ->as("qr.")
                ->middleware(['web', 'auth', '2fa'])
                ->group(base_path('routes/qr/principal.php'));
        });
    }
}
