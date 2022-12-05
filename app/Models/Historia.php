<!-- <?php 

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use App\Models\DetalleHistoria;
// use App\Models\user;
// use App\Models\mascota;


// /**
//  * Class Historia
//  *
//  * @property $id
//  * @property $Fecha
//  * @property $Diagnostico
//  * @property $Tratamiento
//  * @property $Medicamentos
//  * @property $Motivo de consulta
//  * @property $Dieta
//  * @property $Vacunacion
//  * @property $Desparacitacion
//  * @property $Estado Reproductivo
//  * @property $Peso
//  * @property $Mucosas
//  * @property $Turgencia
//  * @property $Pulso
//  * @property $Otros
//  * @property $Anamnesis
//  * @property $Enfermedades o procedimientos anteriores
//  * @property $Lista Problemas
//  * @property $Diagnosticos diferenciales
//  * @property $Plan diagnostico
//  * @property $Diagnostico presuntivo
//  * @property $Diagnostico definitivo
//  * @property $Pronostico
//  * @property $Plan terapeutico
//  * @property $Observaciones
//  * @property $Tratamiento al diagnostico
//  * @property $Estado
//  * @property $Actitud
//  * @property $Hidratacion
//  * @property $Estado nutricional
//  * @property $Modulos superficiales
//  * @property $Sistema cardiovascular
//  * @property $Sistema respiratorio
//  * @property $Sistema digestivo
//  * @property $Sistema reproductivo
//  * @property $Sistema urinario
//  * @property $Sistema nervioso
//  * @property $Sistema musculo-esqueletico
//  * @property $Ojos
//  * @property $Piel y Anexos
//  * @property $mascota_id
//  * @property $user_id
//  * @property $created_at
//  * @property $updated_at
//  *
//  * @property DetalleHistoria[] $detalleHistorias
//  * @property Mascota $mascota
//  * @property User $user
//  * @package App
//  * @mixin \Illuminate\Database\Eloquent\Builder
//  */
// class Historia extends Model
// {
    
//     static $rules = [
// 		'Fecha' => 'required',
// 		'Diagnostico' => 'required',
// 		'Tratamiento' => 'required',
// 		'Medicamentos' => 'required',
// 		'Motivo de consulta' => 'required',
// 		'Dieta' => 'required',
// 		'Vacunacion' => 'required',
// 		'Desparacitacion' => 'required',
// 		'Estado Reproductivo' => 'required',
// 		'Peso' => 'required',
// 		'Mucosas' => 'required',
// 		'Turgencia' => 'required',
// 		'Pulso' => 'required',
// 		'Otros' => 'required',
// 		'Anamnesis' => 'required',
// 		'Enfermedades o procedimientos anteriores' => 'required',
// 		'Lista Problemas' => 'required',
// 		'Diagnosticos diferenciales' => 'required',
// 		'Plan diagnostico' => 'required',
// 		'Diagnostico presuntivo' => 'required',
// 		'Diagnostico definitivo' => 'required',
// 		'Pronostico' => 'required',
// 		'Plan terapeutico' => 'required',
// 		'Observaciones' => 'required',
// 		'Tratamiento al diagnostico' => 'required',
// 		'Estado' => 'required',
// 		'Actitud' => 'required',
// 		'Hidratacion' => 'required',
// 		'Estado nutricional' => 'required',
// 		'Modulos superficiales' => 'required',
// 		'Sistema cardiovascular' => 'required',
// 		'Sistema respiratorio' => 'required',
// 		'Sistema digestivo' => 'required',
// 		'Sistema reproductivo' => 'required',
// 		'Sistema urinario' => 'required',
// 		'Sistema nervioso' => 'required',
// 		'Sistema musculo-esqueletico' => 'required',
// 		'Ojos' => 'required',
// 		'Piel y Anexos' => 'required',
// 		'mascota_id' => 'required',
//     ];

//     protected $perPage = 20;

//     /**
//      * Attributes that should be mass-assignable.
//      *
//      * @var array
//      */
//     protected $fillable = ['Fecha','Diagnostico','Tratamiento','Medicamentos','Motivo de consulta','Dieta','Vacunacion','Desparacitacion','Estado Reproductivo','Peso','Mucosas','Turgencia','Pulso','Otros','Anamnesis','Enfermedades o procedimientos anteriores','Lista Problemas','Diagnosticos diferenciales','Plan diagnostico','Diagnostico presuntivo','Diagnostico definitivo','Pronostico','Plan terapeutico','Observaciones','Tratamiento al diagnostico','Estado','Actitud','Hidratacion','Estado nutricional','Modulos superficiales','Sistema cardiovascular','Sistema respiratorio','Sistema digestivo','Sistema reproductivo','Sistema urinario','Sistema nervioso','Sistema musculo-esqueletico','Ojos','Piel y Anexos','mascota_id','user_id'];


//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasMany
//      */
//     public function detalleHistorias()
//     {
//         return $this->hasMany('App\Models\DetalleHistoria', 'historia_id', 'id');
//     }
    
//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasOne
//      */
//     public function mascota()
//     {
//         return $this->hasOne('App\Models\Mascota', 'id', 'mascota_id');
//     }
    
//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasOne
//      */
//     public function user()
//     {
//         return $this->hasOne('App\Models\User', 'id', 'user_id');
//     }
    

// }
