<?php

namespace App\Models;

use App\Classes\Models\Model;

class HojaVida extends Model
{
    const TC_ESTADO = 'TC_ESTADO_HOJA_DE_VIDA';
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    protected $table = 'hoja_vida';
    protected $fillable = [
        'id_usuario',
        'info_personal',
        'info_formacion',
        'info_ocupacion',
        'info_experiencia',
        'info_referencias_p',
        'info_referencias_f',
        'estado',
    ];
}
