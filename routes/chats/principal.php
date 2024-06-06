<?php

use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MensajeController::class, 'index'])->name('index');
Route::get('/{contacto}/chat', [MensajeController::class, 'chat'])->name('contacto');
Route::post('/enviar-mensaje', [MensajeController::class, 'store'])->name('store');