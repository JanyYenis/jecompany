<?php

namespace App\Models;

use App\Classes\Models\Model;

class Mensaje extends Model
{
    const ACTIVO = 1;
    const ELIMINADO = 0;

    const TC_TIPO_MENSAJE = 'TC_TIPO_MENSAJE';
    const TEXTO     = 1;
    const IMAGEN    = 2;
    const VIDEO     = 3;
    const DOCUMENTO = 4;

    protected $table = 'mensajes';
    protected $appends = ['es_imagen', 'es_video', 'es_documento'];
    protected $fillable = [
        'de',
        'para',
        'multimedia',
        'contenido',
        'tipo',
        'estado',
    ];

    public function deU()
    {
        return $this->belongsTo(Usuario::class, 'de', 'id');
    }

    public function paraU()
    {
        return $this->belongsTo(Usuario::class, 'para', 'id');
    }

    public function infoMensaje()
    {
        return darInfoConcepto($this, self::TC_TIPO_MENSAJE, 'tipo')->selectRaw('conceptos.*');
    }

    public static function darTipoMensaje($infoTipoConcepto = true)
    {
        return darConceptos(self::TC_TIPO_MENSAJE, $infoTipoConcepto);
    }

    public function getEsImagenAttribute()
    {
        return $this->tipo == self::IMAGEN;
    }

    public function getEsVideoAttribute()
    {
        return $this->tipo == self::VIDEO;
    }

    public function getEsDocumentoAttribute()
    {
        return $this->tipo == self::DOCUMENTO;
    }
}
