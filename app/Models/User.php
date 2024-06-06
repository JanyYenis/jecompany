<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function chats()
    {
        return $this->hasMany(ChatUsuario::class, 'cod_usuario', 'id');
    }

    public function chat()
    {
        return $this->hasOne(ChatUsuario::class, 'cod_usuario', 'id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'cod_usuario', 'id');
    }

    public function mensaje()
    {
        return $this->hasOne(Mensaje::class, 'cod_usuario', 'id');
    }
}
