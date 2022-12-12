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
        'Motivodeconsulta',
        'Dieta',
        'Vacunacion',
        'Desparacitacion',
        'EstadoReproductivo',
        'Mucosas',
        'Turgencia',
        'Pulso',
        'Otros',
        'Anamnesis',
        'Enfermedadesopadecimientosanteriores',
        'ListaProblemas',
        'Diagnosticosdiferenciales',
        'Plandiagnostico',
        'Diagnosticopresuntivo',
        'Diagnosticodefinitivo',
        'Pronostico',
        'Planterapeutico',
        'Observaciones',
        'Tratamientoaldiagnostico',
        'Actitud',
        'Hidratacion',
        'Estadonutricional',
        'Modulossuperficiales',
        'Sistemacardiovascular',
        'Sistemarespiratorio',
        'Sistemadigestivo',
        'Sistemaurinario',
        'Sistemanervioso',
        'Sistemamusculo-esqueletico',
        'Ojos',
        'PielyAnexos',
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