<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->text('Diagnostico');
            $table->text('Tratamiento');
            $table->text('Medicamentos');
            $table->text('Motivo de consulta');
            $table->integer('Dieta');
            $table->boolean('Vacunacion');
            $table->boolean('Desparacitacion');
            $table->boolean('Estado Reproductivo');
            $table->float('Peso');
            $table->text('Mucosas');
            $table->text('Turgencia');
            $table->float('Pulso');
            $table->text('Otros');
            $table->text('Anamnesis');
            $table->text('Enfermedades o procedimientos anteriores');
            $table->text('Lista Problemas');
            $table->text('Diagnosticos diferenciales');
            $table->text('Plan diagnostico');
            $table->text('Diagnostico presuntivo');
            $table->text('Diagnostico definitivo');
            $table->text('Pronostico');
            $table->text('Plan terapeutico');
            $table->text('Observaciones');
            $table->text('Tratamiento al diagnostico');
            $table->boolean('Estado');
            $table->boolean('Actitud');
            $table->boolean('Hidratacion');
            $table->boolean('Estado nutricional');
            $table->boolean('Modulos superficiales');
            $table->boolean('Sistema cardiovascular');
            $table->boolean('Sistema respiratorio');
            $table->boolean('Sistema digestivo');
            $table->boolean('Sistema reproductivo');
            $table->boolean('Sistema urinario');
            $table->boolean('Sistema nervioso');
            $table->boolean('Sistema musculo-esqueletico');
            $table->boolean('Ojos');
            $table->boolean('Piel y Anexos');
            $table->unsignedBigInteger('mascota_id');
            $table->foreign('mascota_id')->references('id')->on('mascotas'); 
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historias');
    }
};
