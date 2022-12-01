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
        Schema::create('horario_agendas', function (Blueprint $table) {
            $table->id();
            $table->integer('Estado');
            $table->date('Fecha');
            $table->time('Hora_ini');
            $table->time('Hora_fin');
            $table->unsignedBigInteger('id_Rol');
            $table->foreign('id_Rol')->references('id')->on('roles');
            $table->unsignedBigInteger('id_servi');
            $table->foreign('id_servi')->references('id')->on('servicios');
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
        Schema::dropIfExists('horario_agendas');
    }
};
