<?php

namespace App\Models;

use App\Classes\Models\Model;

class Config extends Model
{
    protected $table = 'config';
    public $timestamps = false;

    const ACTIVO = 1;
    const INACTIVO = 0;

    protected $fillable = [
        "version",
        "waba_id",
        "phone_number_id",
        "token",
        "numero",
        "estado",
        "cod_proyecto",
    ];
}