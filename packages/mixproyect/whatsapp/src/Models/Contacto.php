<?php

namespace Mixproyect\Whatsapp\Models;

use App\Classes\Models\Model;

class Contacto extends Model
{
    protected $connection = 'second_connection';
    protected $table = 'contactos';
    protected $appends = ['nombre_completo'];

    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    protected $fillable = [
        'tipo_identificacion',
        'identificacion',
        'email',
        'nombre',
        'apellido',
        'genero',
        'telefono',
        'estado',
    ];

    /** Campos a castear a un tipo de PHP */
    protected $casts = [
        "created_at" => "date:d/m/Y",
        "updated_at" => "date:d/m/Y"
    ];

    protected $dates = [
        "created_at" => "date:d/m/Y ",
        "updated_at" => "date:d/m/Y ",
    ];

    public function detalleCampanas()
    {
        return $this->hasMany(DetalleCampana::class, 'contacto_id', 'id');
    }

    public function etiquetas()
    {
        return $this->hasMany(EtiquetaContacto::class, 'contacto_id', 'id');
    }

    public function etiquetasActivo()
    {
        return $this->etiquetas()->where('estado', EtiquetaContacto::ACTIVO);
    }

    public function etiqueta()
    {
        return $this->hasOne(EtiquetaContacto::class, 'contacto_id', 'id');
    }

    public function etiquetaActivo()
    {
        return $this->etiqueta()->where('estado', EtiquetaContacto::ACTIVO);
    }

    public function getNombreCompletoAttribute()
    {
        $nombre = $this?->nombre ?? 'N/A';
        $apellido = '';
        if ($this->apellido) {
            $apellido = $this->apellido;
        }
        
        return $nombre.' '.$apellido;
    }
}
