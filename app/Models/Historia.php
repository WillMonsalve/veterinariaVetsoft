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

    protected $fillable = [
        'Fecha',
        'Diagnostico',
        'Tratamiento',
        'Medicamentos',
        'Motivo de consulta',
        'Dieta',
        'Vacunacion',
        'Desparacitacion',
        'Estado Reproductivo',
        'Mucosas',
        'Turgencia',
        'Pulso',
        'Otros',
        'Anamnesis',
        'Enfermedades o padecimientos anteriores',
        'Lista Problemas',
        'Diagnosticos diferenciales',
        'Plan diagnostico',
        'Diagnostico presuntivo',
        'Diagnostico definitivo',
        'Pronostico',
        'Plan terapeutico',
        'Observaciones',
        'Tratamiento al diagnostico',
        'Actitud',
        'Hidratacion',
        'Estado nutricional',
        'Modulos superficiales',
        'Sistema cardiovascular',
        'Sistema respiratorio',
        'Sistema digestivo',
        'Sistema urinario',
        'Sistema nervioso',
        'Sistema musculo-esqueletico',
        'Ojos',
        'Piel y Anexos',
        'mascota_id',
        'user_id'
        
               
    ];

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