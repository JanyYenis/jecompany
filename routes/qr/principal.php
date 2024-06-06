<?php

use App\Http\Controllers\QrController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QrController::class, 'index'])->name('index');
Route::post('/generar-Qr', [QrController::class, 'generarQr'])->name('generarQr');