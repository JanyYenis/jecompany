<?php

use App\Http\Controllers\KeenthemesController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/pages",  "as" => "pages."], function () {
    Route::get('/about-us', [KeenthemesController::class, 'aboutUs'])
        ->name('about-us');
    Route::get('/invoice', [KeenthemesController::class, 'invoice'])
        ->name('invoice');
    Route::get('/pricing', [KeenthemesController::class, 'pricing'])
        ->name('pricing');
});

Route::group(["prefix" => "/cuenta",  "as" => "cuenta."], function () {
    Route::get('/seguridad', [KeenthemesController::class, 'seguridad'])
        ->name('seguridad');
});