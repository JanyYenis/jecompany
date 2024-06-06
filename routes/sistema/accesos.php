<?php

use App\Http\Controllers\Sistema\AccesoController;
use Illuminate\Support\Facades\Route;

Route::get('/listado', [AccesoController::class, 'listado'])->name('listado');
Route::get('/resumen', [AccesoController::class, 'resumen'])->name('resumen');
Route::get('/marca-salida/{usuario}', [AccesoController::class, 'marcarSalida'])->name('marca-salida');