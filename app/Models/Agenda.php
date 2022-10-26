<?php

namespace App\Models;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion muchos a muchos

    public function Citas(){
        return $this->belongsToMany(Cita::class);
    }
}
