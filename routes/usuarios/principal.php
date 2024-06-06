<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsuarioController::class, 'index'])->name('index');
Route::get('/listado', [UsuarioController::class, 'listado'])->name('listado');
Route::get('{usuario}/editar', [UsuarioController::class, 'edit'])->name('edit');
Route::put('{usuario}/actualizar', [UsuarioController::class, 'update'])->name('update');
Route::post('/guardarImagen', [UsuarioController::class, 'guardarImagen'])->name('guardarImagen');

Route::put('/actualizar-email/{usuario}', [UsuarioController::class, 'actualizarEmail'])->name('actualizar.email');
Route::put('/actualizar-contraseña/{usuario}', [UsuarioController::class, 'actualizarContrasena'])->name('actualizar.contrasena');