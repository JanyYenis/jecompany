<?php

namespace App\Models;

use App\Classes\Models\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $fillable = [
        'estado',
    ];

    public function usuarios()
    {
        return $this->hasMany(ChatUsuario::class, 'cod_chat', 'id');
    }

    public function usuario()
    {
        return $this->hasOne(ChatUsuario::class, 'cod_chat', 'id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'cod_chat', 'id');
    }

    public function mensaje()
    {
        return $this->hasOne(Mensaje::class, 'cod_chat', 'id');
    }
}
