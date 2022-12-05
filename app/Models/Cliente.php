  <?php

namespace App\Models;

use App\Models\Cita;
use App\Models\User;
use App\Models\Mascota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',
        'apellido',
        'direccion',
        'cedula',
        'edad',
        'telefono',
        'email',
        'estado',


    ];

    //Relacion uno a muchos inversa
    public function Users(){
        return $this->belongsTo(User::class);
    }

     //Relacion uno a muchos
     public function Citas(){
        return $this->hasMany(Cita::class);
    }

    public function Mascotas(){
        return $this->hasMany(Mascota::class, 'id');
    }
}
