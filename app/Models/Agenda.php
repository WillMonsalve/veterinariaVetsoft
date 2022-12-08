<?php
namespace App\Models;
use App\Models\User;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class agenda extends Model
{

    use HasFactory;
    protected $fillable = ['fecha_inicio',
    'fecha_final',
    'hora_inicio',
    'hora_intermedia_mañana',
    'hora_intermedia_tarde',
    'hora_final',
    'user_id',
    ];

    public function Roles(){
        return $this->belongsTo(Role::class);
    }


}
