<?php

use App\Http\Controllers\WhatsApp\CampanaController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/campañas",  "as" => "campanas."], function () {
    Route::get('/', [CampanaController::class, 'index'])
        ->name('index');
    Route::get('/listado', [CampanaController::class, 'listado'])
        ->name('listado');
    Route::get('/{campana}/ver', [CampanaController::class, 'show'])
        ->name('show');

    Route::get('/{id_plantilla}/validar-campos', [CampanaController::class, 'validarCampos'])
        ->name('validarCampos');
    Route::get('/cargar-medicos', [CampanaController::class, 'cargarMedicos'])
        ->name('cargarMedicos');

    Route::get('/{campana}/envios', [CampanaController::class, 'envios'])
        ->name('envios');
    Route::get('/{campana}/listado-detalle', [CampanaController::class, 'listadoDetalle'])
        ->name('listado-detalle');

    Route::get('/{campana}/editar', [CampanaController::class, 'edit'])
        ->name('edit');
    Route::put('/{campana}/actualizar', [CampanaController::class, 'update'])
        ->name('update');
    Route::post('/crear', [CampanaController::class, 'store'])
        ->name('store');
    Route::delete('/{campana}/eliminar', [CampanaController::class, 'destroy'])
        ->name('delete');
});