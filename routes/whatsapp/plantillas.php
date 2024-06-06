<?php

use App\Http\Controllers\WhatsApp\PlantillaController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/plantillas",  "as" => "plantillas."], function () {
    Route::get('/', [PlantillaController::class, 'index'])
        ->name('index');
    Route::get('/listado', [PlantillaController::class, 'listadoPlantilla'])
        ->name('listado');
    Route::get('/{id}/ver', [PlantillaController::class, 'show'])
        ->name('show');
    Route::get('/{plantilla}/editar', [PlantillaController::class, 'edit'])
        ->name('edit');
    Route::put('/{plantilla}/actualizar', [PlantillaController::class, 'update'])
        ->name('update');
    Route::post('/crear', [PlantillaController::class, 'store'])
        ->name('store');
    Route::delete('/{plantilla}/eliminar', [PlantillaController::class, 'destroy'])
        ->name('delete');
});