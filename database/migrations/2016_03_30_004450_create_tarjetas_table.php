<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('administrador_id')->unsigned()->nullable();
            $table->integer('docente_id')->unsigned()->nullable();
            $table->integer('grupo_id')->unsigned();
            $table->timestamps();

            $table->foreign('administrador_id')->references('id')->on('administradores');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarjetas');
    }
}
