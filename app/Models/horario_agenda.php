<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;
use App\Models\User;

class horario_agenda extends Model
{
    use HasFactory;
    protected $fillable=[
        'Fecha',
        'Hora_ini',
        'Hora_fin',
        'id_user',
        'id_servi',
        'Estado',];

    public function Servicios(){
        return $this->belongsTo(Servicio::class);
    }
    public function Users(){
        return $this->belongsTo(User::class);
    }
 



}
    

