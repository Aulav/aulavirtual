<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReticulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reticulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('numero_semestres');
            $table->integer('numero_materias');
            $table->integer('materia_id')->unsigned();
            $table->integer('grupo_id')->unsigned();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });

        Schema::create('materia_reticula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('reticula_id')->unsigned();
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('reticula_id')->references('id')->on('reticulas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reticulas');
    }
}
