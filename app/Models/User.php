<?php

namespace App\Models;

use App\Models\Agenda;
use App\Models\Cliente;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

   
    protected $fillable = [
        'name',
        'apellido',
        'direccion',
        'cedula',
        'edad',
        'telefono',
        'email',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    protected $appends = [
        'profile_photo_url',
    ];

    //Relacion uno a muchos
    public function Agendas(){
        return $this->hasMany(Agenda::class);
    }

    public function Clientes(){
        return $this->hasMany(Cliente::class);
    }
}
