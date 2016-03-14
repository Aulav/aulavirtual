<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('fecha_aplicacion');
            $table->integer('duracion');
            $table->integer('materia_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('docente_id')->references('id')->on('docentes');
        });

        Schema::create('grupo_examen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('examen_id')->unsigned();
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('examen_id')->references('id')->on('examenes');
        });

        Schema::create('examen_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('examen_id')->unsigned();
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('examen_id')->references('id')->on('examenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('examenes');
    }
}
