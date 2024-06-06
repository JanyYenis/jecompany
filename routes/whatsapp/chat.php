<?php

use App\Http\Controllers\WhatsApp\ChatController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/chat",  "as" => "chats."], function () {
    Route::get('/', [ChatController::class, 'index'])->name('index');
});