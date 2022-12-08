<?php

namespace App\Models;

use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'agenda_id',
        'hora_id',
        'servicio_id',
        'cliente_id',

    ];

    //Relacion uno a muchos inversa
    public function Servicios(){
        return $this->belongsTo(Servicio::class);
    }

    //Relacion uno a muchos inversa
    public function Clientes(){
        return $this->belongsTo(Cliente::class);
    }

    //Relacion muchos a muchos

    public function Horarios(){
        return $this->belongsToMany(Horario::class);
    }
}
