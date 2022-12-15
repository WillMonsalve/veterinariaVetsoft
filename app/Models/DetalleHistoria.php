<?php

namespace App\Models;
use App\Models\Historia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleHistoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'historia_id',
        'descripcion',
    ];

    public function Historias(){
       return $this->belongsTo(Historia::class);
        
    }

}
