<?php

use Illuminate\Support\Facades\Route;
use Mixproyect\Whatsapp\Controllers\PlantillaController;

Route::group(["prefix" => "/plantillas",  "as" => "plantillas."], function () {
    Route::get('/', [PlantillaController::class, 'index'])
        ->name('index')->middleware(['web', 'auth']);
    Route::get('/listado', [PlantillaController::class, 'listadoPlantilla'])
        ->name('listado')->middleware(['web', 'auth']);
    Route::get('/{id}/ver', [PlantillaController::class, 'show'])
        ->name('show')->middleware(['web', 'auth']);
    Route::get('/{plantilla}/editar', [PlantillaController::class, 'edit'])
        ->name('edit')->middleware(['web', 'auth']);
    Route::put('/{plantilla}/actualizar', [PlantillaController::class, 'update'])
        ->name('update')->middleware(['web', 'auth']);
    Route::post('/crear', [PlantillaController::class, 'store'])
        ->name('store')->middleware(['web', 'auth']);
    Route::delete('/{plantilla}/eliminar', [PlantillaController::class, 'destroy'])
        ->name('delete')->middleware(['web', 'auth']);
});