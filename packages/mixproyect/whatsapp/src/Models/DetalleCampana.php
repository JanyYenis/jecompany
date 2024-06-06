<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class DetalleCampana extends Model
{
    protected $connection = 'second_connection';
    protected $table = 'detalle_campana';
    public $timestamps = false;

    protected $fillable = [
        "campana_id",
        "contacto_id",
        "participacion",
        "clic_contacto_wpp",
        "etiqueta_id",
        "telefono",
        "wamid",
    ];

    public function campana()
    {
        return $this->belongsTo(Campana::class, 'campana_id', 'id');
    }

    public function etiqueta()
    {
        return $this->belongsTo(Etiqueta::class,'etiqueta_id','id');
    }

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'contacto_id', 'id');
    }
    
    public function mensaje()
    {
        return $this->belongsTo(Mensaje::class,'wamid', 'id_mensaje');
    }
}