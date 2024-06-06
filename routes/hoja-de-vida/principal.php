<?php

use App\Http\Controllers\HojaVidaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HojaVidaController::class, 'index'])->name('index');
Route::get('/crear', [HojaVidaController::class, 'create'])->name('create');
Route::get('{usuario}/descargar', [HojaVidaController::class, 'descargar'])->name('descargar');
Route::post('/guardar', [HojaVidaController::class, 'store'])->name('store');
Route::put('{hojaVida}/actualizar', [HojaVidaController::class, 'update'])->name('update');