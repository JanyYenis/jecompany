<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class ContenidoCampana extends Model
{
    protected $connection = 'second_connection';
    protected $table = 'contenido_campana';
    public $timestamps = false;

    protected $fillable = [
        "campana_id",
        "numero",
        "valor",
    ];

    public function campana()
    {
        return $this->belongsTo(Campana::class, 'campana_id', 'id');
    }
}