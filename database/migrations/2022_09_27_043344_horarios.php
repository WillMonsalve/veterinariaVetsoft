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
        Schema::create('horarios', function (Blueprint $table) {
                $table->id();
                $table->enum('Estado',[1, 2, 3]);
                $table->date('Fecha');
                $table->time('Hora_ini');
                $table->time('Hora_fin');
                $table->unsignedBigInteger('rol');
                $table->foreign('rol')->references('id')->on('roles');
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
        Schema::dropIfExists('horarios');
    }
};
