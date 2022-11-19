<?php



namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    
    use HasFactory;
    protected $fillable=['fecha_inicio', 'fecha_final','hora_inicio','hora_intermedia_mañana','hora_intermedia_tarde','hora_final'];
   
    public function Users(){
        return $this->belongsTo(User::class);
    }
}
