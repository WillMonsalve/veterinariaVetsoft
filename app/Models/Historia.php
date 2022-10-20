<?php

namespace App\Models;

use App\Models\Mascota;
use App\Models\DetalleHistoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historia extends Model
{
    use HasFactory;

    public function Mascotas(){
        return $this->belongsTo(Mascota::class);
    }

    public function Detalle(){
        return $this->hasMany(DetalleHistoria::class);
    }
}
