<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class Mensaje extends Model
{
    protected $connection = 'second_connection';
    protected $table = 'mensajes';
    public $timestamps = false;

    protected $fillable = [
        "wamid",
        "tipo",
        "de",
        "para",
        "mensaje",
        "header",
        "fooder",
        "tipo_header",
        "estado",
        "fecha_envio",
    ];
}