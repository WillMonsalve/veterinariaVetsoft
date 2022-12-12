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
            $table->string('Diagnostico');
            $table->string('Tratamiento');
            $table->string('Medicamentos');
            $table->string('Motivodeconsulta');
            $table->string('Dieta');
            $table->string('Vacunacion');
            $table->string('Desparacitacion');
            $table->string('EstadoReproductivo');
            $table->string('Mucosas');
            $table->string('Turgencia');
            $table->float('Pulso');
            $table->string('Otros');
            $table->string('Anamnesis');
            $table->string('Enfermedadesoprocedimientosanteriores');
            $table->string('ListaProblemas');
            $table->string('Diagnosticosdiferenciales');
            $table->string('Plandiagnostico');
            $table->string('Diagnosticopresuntivo');
            $table->string('Diagnosticodefinitivo');
            $table->string('Pronostico');
            $table->string('Planterapeutico');
            $table->string('Observaciones');
            $table->string('Tratamientoaldiagnostico');
            $table->string('Actitud');
            $table->string('Hidratacion');
            $table->string('Estadonutricional');
            $table->string('Modulossuperficiales');
            $table->string('Sistemacardiovascular');
            $table->string('Sistemarespiratorio');
            $table->string('Sistemadigestivo');
            $table->string('Sistemaurinario');
            $table->string('Sistemanervioso');
            $table->string('Sistemamusculo-esqueletico');
            $table->string('Ojos');
            $table->string('PielyAnexos');
            $table->unsignedBigInteger('mascota_id');
            $table->foreign('mascota_id')->references('id')->on('mascotas');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
