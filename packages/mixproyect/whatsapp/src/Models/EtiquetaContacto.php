<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class EtiquetaContacto extends Model
{
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;
    
    protected $connection = 'second_connection';
    protected $table = 'etiquetas_contactos';

    protected $fillable = [
        "contacto_id",
        "etiqueta_id",
        "estado",
    ];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'contacto_id', 'id');
    }

    public function etiqueta()
    {
        return $this->belongsTo(Etiqueta::class, 'etiqueta_id', 'id');
    }
}