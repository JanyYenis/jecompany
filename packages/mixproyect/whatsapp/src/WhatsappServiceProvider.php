<?php

namespace Mixproyect\Whatsapp;

use Illuminate\Support\ServiceProvider;

class WhatsappServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // register our controller
        $this->app->make('Mixproyect\Whatsapp\Controllers\HomeController');
        $this->app->make('Mixproyect\Whatsapp\Controllers\CampanaController');
        $this->app->make('Mixproyect\Whatsapp\Controllers\ChatController');
        $this->app->make('Mixproyect\Whatsapp\Controllers\ContactoController');
        $this->app->make('Mixproyect\Whatsapp\Controllers\PlantillaController');
        $this->app->make('Mixproyect\Whatsapp\Controllers\WebhookController');

        // vistas
        $this->loadViewsFrom(__DIR__.'/views', 'whatsapp');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Rutas del packete
        include __DIR__.'/routes/web.php';
    }
}
