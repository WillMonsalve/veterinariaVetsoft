<!-- <?php 

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use App\Models\Historia;

// /**
//  * Class DetalleHistoria
//  *
//  * @property $id
//  * @property $Responsable
//  * @property $Fecha
//  * @property $Observaciones
//  * @property $historia_id
//  * @property $created_at
//  * @property $updated_at
//  *
//  * @property Historia $historia
//  * @package App
//  * @mixin \Illuminate\Database\Eloquent\Builder
//  */
// class DetalleHistoria extends Model
// {
    
//     static $rules = [
// 		'Responsable' => 'required',
// 		'Fecha' => 'required',
// 		'Observaciones' => 'required',
// 		'historia_id' => 'required',
//     ];

//     protected $perPage = 20;

//     /**
//      * Attributes that should be mass-assignable.
//      *
//      * @var array
//      */
//     protected $fillable = ['Responsable','Fecha','Observaciones','historia_id'];


//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasOne
//      */
//     public function historia()
//     {
//         return $this->hasOne('App\Models\Historia', 'id', 'historia_id');
//     }
    

// }
