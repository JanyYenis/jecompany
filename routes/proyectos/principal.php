<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProyectoController::class, 'index'])->name('index');
Route::get('/fechas', [ProyectoController::class, 'consultar'])->name('consultar');
Route::post('/crear', [ProyectoController::class, 'store'])->name('store');
Route::get('/editar/{tarea}', [ProyectoController::class, 'edit'])->name('edit');
Route::put('/actualizar/{tarea}', [ProyectoController::class, 'update'])->name('update');
Route::delete('/eliminar/{tarea}', [ProyectoController::class, 'delete'])->name('delete');