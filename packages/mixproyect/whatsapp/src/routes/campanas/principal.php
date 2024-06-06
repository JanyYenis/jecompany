<?php

use Illuminate\Support\Facades\Route;
use Mixproyect\Whatsapp\Controllers\CampanaController;

Route::group(["prefix" => "/campañas",  "as" => "campanas."], function () {
    Route::get('/', [CampanaController::class, 'index'])
        ->name('index')->middleware(['web', 'auth']);
    Route::get('/listado', [CampanaController::class, 'listado'])
        ->name('listado')->middleware(['web', 'auth']);
    Route::get('/{campana}/ver', [CampanaController::class, 'show'])
        ->name('show')->middleware(['web', 'auth']);

    Route::get('/{id_plantilla}/validar-campos', [CampanaController::class, 'validarCampos'])
        ->name('validarCampos')->middleware(['web', 'auth']);
    Route::get('/cargar-medicos', [CampanaController::class, 'cargarMedicos'])
        ->name('cargarMedicos')->middleware(['web', 'auth']);

    Route::get('/{campana}/envios', [CampanaController::class, 'envios'])
        ->name('envios')->middleware(['web', 'auth']);
    Route::get('/{campana}/listado-detalle', [CampanaController::class, 'listadoDetalle'])
        ->name('listado-detalle')->middleware(['web', 'auth']);

    Route::get('/{campana}/editar', [CampanaController::class, 'edit'])
        ->name('edit')->middleware(['web', 'auth']);
    Route::put('/{campana}/actualizar', [CampanaController::class, 'update'])
        ->name('update')->middleware(['web', 'auth']);
    Route::post('/crear', [CampanaController::class, 'store'])
        ->name('store')->middleware(['web', 'auth']);
    Route::delete('/{campana}/eliminar', [CampanaController::class, 'destroy'])
        ->name('delete')->middleware(['web', 'auth']);
});