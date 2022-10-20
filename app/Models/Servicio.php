<?php

namespace App\Models;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'duracion'];

    // public function getRouteKeyName()
    // {
    //     return 'nombre';
    // }

    //Relacion uno a muchos
    public function Citas(){
        return $this->hasMany(Cita::class);
    }
}
