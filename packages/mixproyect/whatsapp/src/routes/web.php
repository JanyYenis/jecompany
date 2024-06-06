<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/Whatsapp",  "as" => "whatsapp."], function () {
    include 'contactos/principal.php';
    include 'chats/principal.php';
    include 'campanas/principal.php';
    include 'plantillas/principal.php';
});