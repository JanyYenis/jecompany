<?php

namespace App\Models;

use App\Classes\Models\Model;

class Direccion extends Model
{
    const TC_ESTADO = 'TC_ESTADO_DIRECCIONES';
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    const TC_TIPO_VIVIENDA = 'TC_TIPO_VIVIENDA';
    const PROPIA    = 1;
    const FAMILIAR  = 2;
    const ALQUILADA = 3;
    const TIPO_VIVIENDA_OTRO      = 0;

    const TC_ESTADO_SOCIOECONOMICO = 'TC_ESTADO_SOCIOECONOMICO';
    const BAJO_BAJO  = 1;
    const BAJO       = 2;
    const MEDIO_BAJO = 3;
    const MEDIO      = 4;
    const MEDIO_ALTO = 5;
    const ALTO       = 6;
    const ESTADO_SOCIOECONOMICO_OTRO = 0;

    protected $table = 'direcciones';
    protected $fillable = [
        'cod_usuario',
        'tipo_vivienda',
        'estado_socioeconomico',
        'direccion',
        'estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cod_usuario', 'id');
    }

    public function infoVivienda()
    {
        return darInfoConcepto($this, self::TC_TIPO_VIVIENDA, 'tipo_vivienda')->selectRaw('conceptos.*');
    }
    
    public function infoEstadoSocieconomico()
    {
        return darInfoConcepto($this, self::TC_ESTADO_SOCIOECONOMICO, 'estado_socioeconomico')->selectRaw('conceptos.*');
    }

    public static function darTipoVivienda($infoTipoConcepto = true)
    {
        return darConceptos(self::TC_TIPO_VIVIENDA, $infoTipoConcepto);
    }
    
    public static function darTipoEstadoSocieconomico($infoTipoConcepto = true)
    {
        return darConceptos(self::TC_ESTADO_SOCIOECONOMICO, $infoTipoConcepto);
    }
}
