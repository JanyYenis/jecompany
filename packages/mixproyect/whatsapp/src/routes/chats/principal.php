<?php

use Illuminate\Support\Facades\Route;
use Mixproyect\Whatsapp\Controllers\ChatController;

Route::group(["prefix" => "/chat",  "as" => "chats."], function () {
    Route::get('/', [ChatController::class, 'index'])->name('index')->middleware(['web', 'auth']);
});