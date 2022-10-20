<?php

namespace App\Models;

use App\Models\Historia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleHistoria extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function Historias(){
        return $this->belongsTo(Historia::class);
    }
}
