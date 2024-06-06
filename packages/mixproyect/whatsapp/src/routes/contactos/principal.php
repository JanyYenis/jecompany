<?php

use Illuminate\Support\Facades\Route;
use Mixproyect\Whatsapp\Controllers\ContactoController;

Route::group(["prefix" => "/contactos",  "as" => "contactos."], function () {
    Route::get('/', [ContactoController::class, 'index'])
        ->name('index')->middleware(['web', 'auth']);
    Route::get('/listado', [ContactoController::class, 'listado'])
        ->name('listado')->middleware(['web', 'auth']);
    Route::get('/{contacto}/ver', [ContactoController::class, 'show'])
        ->name('show')->middleware(['web', 'auth']);
    Route::get('/{contacto}/editar', [ContactoController::class, 'edit'])
        ->name('edit')->middleware(['web', 'auth']);
    Route::put('/{contacto}/actualizar', [ContactoController::class, 'update'])
        ->name('update')->middleware(['web', 'auth']);
    Route::post('/crear', [ContactoController::class, 'store'])
        ->name('store')->middleware(['web', 'auth']);
    Route::delete('/{contacto}/eliminar', [ContactoController::class, 'destroy'])
        ->name('delete')->middleware(['web', 'auth']);
});