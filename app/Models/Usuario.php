<?php

namespace App\Models;

use App\Classes\Models\User;
use App\Notifications\RecueperarContrasena;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Permission\Traits\HasRoles;

class Usuario extends User
{
    use HasRoles;
    
    // Roles
    const ROL_SUPER_ADMINISTRADOR = 'Super Admin';
    const ROL_ADMINISTRADOR = 'admin';
    const ROL_CLIENTE       = 'cliente';

    // Permisos
    const PERMISO_LISTADO   = 'usuarios.listado';
    const PERMISO_CREAR     = 'usuarios.crear';
    const PERMISO_EDITAR    = 'usuarios.editar';
    const PERMISO_ELIMINAR  = 'usuarios.eliminar';

    const TC_ESTADO = 'TC_ESTADO_USUARIOS';
    const ACTIVO    = 1;
    const INACTIVO  = 2;
    const ELIMINADO = 0;

    const TC_GENERO_USUARIOS = 'TC_GENERO_USUARIOS';
    const MASCULINO = 1;
    const FEMENINO  = 2;

    const TC_TIPO_DOCUMENTO = 'TC_TIPO_DOCUMENTO';
    const CC = 1;
    const TI = 2;
    const PP = 3;

    protected $table = 'usuarios';
    protected $appends = ['nombre_completo', 'numero_completo'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'genero',
        'tipo_documento',
        'identificacion',
        'email',
        'password',
        'telefono',
        'codigo_tel	',
        'pais_tel',
        'whatsapp',
        'fecha',
        'id_ciudad',
        'foto',
        'estado',
        'google2fa_secret',
    ];

    protected $with = [
        'ciudad.pais',
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
        "fecha" => "date:d/m/Y",
        'password' => 'hashed',
    ];

    protected $dates = [
        "fecha" => "date:d/m/Y ",
    ];

    /** 
     * Interact with the user's first name.
     *
     * @param  string  $value
     */
    protected function google2faSecret()
    {
        if (!$this->google2fa_secret) {
            return false;
        }

        return new Attribute(
            get: fn ($value) =>  decrypt($value),
            set: fn ($value) =>  encrypt($value),
        );
    }
    
    public function hojaVida()
    {
        return $this->hasOne(HojaVida::class, 'id_usuario', 'id');
    }

    public function hojaVidaActiva()
    {
        return $this->hojaVida()->where('estado', HojaVida::ACTIVO);
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id');
    }

    public function infoGenero()
    {
        return darInfoConcepto($this, self::TC_GENERO_USUARIOS, 'genero')->selectRaw('conceptos.*');
    }
    
    public function infoDocumento()
    {
        return darInfoConcepto($this, self::TC_TIPO_DOCUMENTO, 'tipo_documento')->selectRaw('conceptos.*');
    }

    public static function darTipoGenero($infoTipoConcepto = true)
    {
        return darConceptos(self::TC_GENERO_USUARIOS, $infoTipoConcepto);
    }
    
    public static function darTipoDocumento($infoTipoConcepto = true)
    {
        return darConceptos(self::TC_TIPO_DOCUMENTO, $infoTipoConcepto);
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

    public function getNumeroCompletoAttribute()
    {
        $tel = $this->codigo_tel.$this->telefono;
        
        return $tel;
    }

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

    public function calendarios()
    {
        return $this->hasMany(Calendario::class, 'id_usuario', 'id');
    }

    public function calendario()
    {
        return $this->hasOne(Calendario::class, 'id_usuario', 'id');
    }

    public function calendariosActivos()
    {
        return $this->calendarios()->where('estado', Calendario::ACTIVO);
    }

    public function calendarioActivo()
    {
        return $this->calendario()->where('estado', Calendario::ACTIVO);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new RecueperarContrasena($token));
    }
}
