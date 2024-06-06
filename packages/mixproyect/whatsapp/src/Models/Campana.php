<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class Campana extends Model
{
    const ENVIADO    = 1;
    const INACTIVO   = 2;
    const PROGRAMADO = 3;
    const ELIMINADO  = 0;

    protected $connection = 'second_connection';
    protected $table = 'campanas';

    protected $fillable = [
        "descripcion",
        "link_multimedia",
        "fecha_programacion",
        "estado",
    ];

    /** Campos a castear a un tipo de PHP */
    protected $casts = [
        "fecha_programacion" => "date:d/m/Y",
        "created_at"         => "date:d/m/Y",
        "updated_at"         => "date:d/m/Y"
    ];

    protected $dates = [
        "fecha_programacion" => "date:d/m/Y ",
        "created_at"         => "date:d/m/Y ",
        "updated_at"         => "date:d/m/Y ",
    ];

    public function detalles()
    {
        return $this->hasMany(DetalleCampana::class, 'campana_id', 'id');
    }
}