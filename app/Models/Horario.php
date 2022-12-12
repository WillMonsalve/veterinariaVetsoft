<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'Estado',
        'Fecha',
        'Hora_ini',
        'Hora_fin',
        'rol',
        'id_servi',

    ];

    public function Servicios(){
        return $this->belongsTo(Servicio::class);
    }
    public function Roles(){
        return $this->belongsTo(Role::class);
    }




}
