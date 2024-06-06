<?php

namespace App\Models;

use App\Classes\Models\Model;

class Tarea extends Model
{
    const TC_ESTADO    = 'TC_ESTADO_TAREAS';
    const PENDIENTE    = 1;
    const EN_EJECUCION = 2;
    const FINALIZADA   = 3;
    const ELIMINADO    = 0;

    protected $table = 'tareas';
    protected $fillable = [
        'cod_usuario',
        'titulo',
        'descripcion',
        'etiquetas',
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cod_usuario', 'id');
    }

    public function responsable()
    {
        return $this->hasOne(ResponsableTarea::class, 'cod_tarea', 'id');
    }

    public function responsables()
    {
        return $this->hasMany(ResponsableTarea::class, 'cod_tarea', 'id');
    }

    public function responsableActivo()
    {
        return $this->responsable()->where('estado', ResponsableTarea::ACTIVO);
    }

    public function responsablesActivos()
    {
        return $this->responsables()->where('estado', ResponsableTarea::ACTIVO);
    }
}
