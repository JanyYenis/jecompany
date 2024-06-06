<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class Etiqueta extends Model
{
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    protected $connection = 'second_connection';
    protected $table = 'etiquetas';

    protected $fillable = [
        "nombre",
        "estado",
    ];

    public function contactos()
    {
        return $this->hasMany(EtiquetaContacto::class, 'etiqueta_id', 'id');
    }

    public function contactosActivo()
    {
        return $this->contactos()->where('estado', EtiquetaContacto::ACTIVO);
    }
    
    public function contacto()
    {
        return $this->hasOne(EtiquetaContacto::class, 'etiqueta_id', 'id');
    }
    
    public function contactoActivo()
    {
        return $this->contacto()->where('estado', EtiquetaContacto::ACTIVO);
    }
}