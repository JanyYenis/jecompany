<?php

namespace App\Models;

use App\Classes\Models\Model;

class ChatUsuario extends Model
{
    protected $table = 'chats_usuarios';
    protected $fillable = [
        'cod_usuario_1',
        'cod_usuario',
        'estado',
    ];

    public function usuario1()
    {
        return $this->belongsTo(Usuario::class, 'cod_usuario_1', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cod_usuario', 'id');
    }
}
