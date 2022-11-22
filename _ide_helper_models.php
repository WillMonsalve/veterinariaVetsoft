<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $Posts
 * @property-read int|null $posts_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cita
 *
 * @property int $id
 * @property int $Estado
 * @property string $Fecha
 * @property string $Hora
 * @property int $servicio_id
 * @property int $cliente_id
 * @property int $agenda_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\agenda[] $Agendas
 * @property-read int|null $agendas_count
 * @property-read \App\Models\Cliente|null $Clientes
 * @property-read \App\Models\Servicio|null $Servicios
 * @method static \Illuminate\Database\Eloquent\Builder|Cita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cita query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereAgendaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereClienteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereServicioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cita whereUpdatedAt($value)
 */
	class Cita extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cliente
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property int $cedula
 * @property int $edad
 * @property string $telefono
 * @property string $email
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cita[] $Citas
 * @property-read int|null $citas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Mascota[] $Mascotas
 * @property-read int|null $mascotas_count
 * @property-read \App\Models\User|null $Users
 * @method static \Database\Factories\ClienteFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereEdad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente whereUserId($value)
 */
	class Cliente extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DetalleHistoria
 *
 * @property int $id
 * @property string $Responsable
 * @property string $Fecha
 * @property string $Observaciones
 * @property int $historia_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Historia|null $Historias
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereHistoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereObservaciones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereResponsable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleHistoria whereUpdatedAt($value)
 */
	class DetalleHistoria extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Historia
 *
 * @property int $id
 * @property string $Fecha
 * @property string $Diagnostico
 * @property string $Tratamiento
 * @property string $Medicamentos
 * @property string $Motivo de consulta
 * @property int $Dieta
 * @property int $Vacunacion
 * @property int $Desparacitacion
 * @property int $Estado Reproductivo
 * @property float $Peso
 * @property string $Mucosas
 * @property string $Turgencia
 * @property float $Pulso
 * @property string $Otros
 * @property string $Anamnesis
 * @property string $Enfermedades o procedimientos anteriores
 * @property string $Lista Problemas
 * @property string $Diagnosticos diferenciales
 * @property string $Plan diagnostico
 * @property string $Diagnostico presuntivo
 * @property string $Diagnostico definitivo
 * @property string $Pronostico
 * @property string $Plan terapeutico
 * @property string $Observaciones
 * @property string $Tratamiento al diagnostico
 * @property int $Estado
 * @property int $Actitud
 * @property int $Hidratacion
 * @property int $Estado nutricional
 * @property int $Modulos superficiales
 * @property int $Sistema cardiovascular
 * @property int $Sistema respiratorio
 * @property int $Sistema digestivo
 * @property int $Sistema reproductivo
 * @property int $Sistema urinario
 * @property int $Sistema nervioso
 * @property int $Sistema musculo-esqueletico
 * @property int $Ojos
 * @property int $Piel y Anexos
 * @property int $mascota_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DetalleHistoria[] $Detalle
 * @property-read int|null $detalle_count
 * @property-read \App\Models\Mascota|null $Mascotas
 * @property-read \App\Models\User|null $Users
 * @method static \Illuminate\Database\Eloquent\Builder|Historia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereActitud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereAnamnesis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDesparacitacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDiagnostico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDiagnosticoDefinitivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDiagnosticoPresuntivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDiagnosticosDiferenciales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereDieta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereEnfermedadesOProcedimientosAnteriores($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereEstadoNutricional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereEstadoReproductivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereHidratacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereListaProblemas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereMascotaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereMedicamentos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereModulosSuperficiales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereMotivoDeConsulta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereMucosas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereObservaciones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereOjos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereOtros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePeso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePielYAnexos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePlanDiagnostico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePlanTerapeutico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePronostico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia wherePulso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaCardiovascular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaDigestivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaMusculoEsqueletico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaNervioso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaReproductivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaRespiratorio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereSistemaUrinario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereTratamiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereTratamientoAlDiagnostico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereTurgencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historia whereVacunacion($value)
 */
	class Historia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $url
 * @property int $imageable_id
 * @property string $imageable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $imageable
 * @method static \Database\Factories\ImageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUrl($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mascota
 *
 * @property int $id
 * @property string $Nombre
 * @property string $Raza
 * @property string $Color
 * @property int $Peso
 * @property string $Especie
 * @property int $Edad
 * @property string $Sexo
 * @property int $cliente_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cliente|null $Clientes
 * @property-read \App\Models\Historia|null $hisorias
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereClienteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereEdad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereEspecie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota wherePeso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereRaza($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereSexo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mascota whereUpdatedAt($value)
 */
	class Mascota extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $extract
 * @property string $body
 * @property string $estado
 * @property int $user_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $Category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $Tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\User $User
 * @property-read \App\Models\Image|null $image
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExtract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Servicio
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property string $duracion
 * @property string $estado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cita[] $Citas
 * @property-read int|null $citas_count
 * @method static \Database\Factories\ServicioFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereDuracion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servicio whereUpdatedAt($value)
 */
	class Servicio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $Posts
 * @property-read int|null $posts_count
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $apellido
 * @property string $direccion
 * @property int $cedula
 * @property int $edad
 * @property string $telefono
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $estado
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\agenda[] $Agendas
 * @property-read int|null $agendas_count
 * @property-read \App\Models\Cliente|null $Clientes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Historia[] $Historias
 * @property-read int|null $historias_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $Posts
 * @property-read int|null $posts_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEdad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\agenda
 *
 * @property int $id
 * @property int $day
 * @property string $estado
 * @property string $morning_start
 * @property string $morning_end
 * @property string $afternoon_start
 * @property string $afternoon_end
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|agenda newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|agenda newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|agenda query()
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereAfternoonEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereAfternoonStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereMorningEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereMorningStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|agenda whereUserId($value)
 */
	class agenda extends \Eloquent {}
}

