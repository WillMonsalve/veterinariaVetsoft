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
        'Nombre',
        'Raza',
        'Color',
        'Peso',
        'Especie',
        'Edad',
        'Sexo',
        'cliente_id',
        'estado',
        
    ];

    //Relacion uno a muchos inversa
    public function Clientes(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    //Relacion de uno a uno
    public function hisorias(){
        return $this->hasOne(Historia::class);
    }
}
