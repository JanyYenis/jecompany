<?php

use App\Http\Controllers\WhatsApp\ContactoController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/contactos",  "as" => "contactos."], function () {
    Route::get('/', [ContactoController::class, 'index'])
        ->name('index');
    Route::get('/listado', [ContactoController::class, 'listado'])
        ->name('listado');
    Route::get('/{contacto}/ver', [ContactoController::class, 'show'])
        ->name('show');
    Route::get('/{contacto}/editar', [ContactoController::class, 'edit'])
        ->name('edit');
    Route::put('/{contacto}/actualizar', [ContactoController::class, 'update'])
        ->name('update');
    Route::post('/crear', [ContactoController::class, 'store'])
        ->name('store');
    Route::delete('/{contacto}/eliminar', [ContactoController::class, 'destroy'])
        ->name('delete');
});