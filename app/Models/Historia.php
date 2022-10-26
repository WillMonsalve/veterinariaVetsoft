<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mascota;
use App\Models\DetalleHistoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historia extends Model
{
    use HasFactory;

    //Relacion uno a uno inversa
    
    public function Mascotas(){
        return $this->belongsTo(Mascota::class);
    }

    //Relacion uno a muchos

    public function Detalle(){
        return $this->hasMany(DetalleHistoria::class);
    }

    //Relacion uno a muchos inversa

    public function Users(){
        return $this->belongsTo(User::class);
    }
}
