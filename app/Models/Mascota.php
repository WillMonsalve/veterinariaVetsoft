<?php

namespace App\Models;

use App\Models\Cliente;
use App\Models\Historia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'raza',
        'color',
        'peso',
        'especie',
        'edad',
        'sexo',
        
    ];

    //Relacion uno a muchos inversa
    public function Clientes(){
        return $this->belongsTo(Cliente::class);
    }

    //Relacion de uno a uno
    public function hisorias(){
        return $this->hasOne(Historia::class);
    }
}
