<?php

namespace App\Models;

use App\Classes\Models\Model;

class Ciudad extends Model
{
    const TC_ESTADO = 'TC_ESTADO_CIUDADES';
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    protected $table = 'ciudades';
    public $timestamps = false;
    protected $fillable = [
        'id_pais',
        'nombre',
        'estado',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'id_pais', 'id');
    }
}
