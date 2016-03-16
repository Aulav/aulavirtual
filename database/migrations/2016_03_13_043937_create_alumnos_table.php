<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('name');
            $table->string('user');
            $table->string('password', 60);
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('direccion');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('sexo');
            $table->integer('edad');
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->integer('institucion_id')->unsigned()->nullable();
            $table->integer('rol_id')->unsigned();
            $table->integer('reticula_id')->unsigned()->nullable();
            $table->integer('grupo_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('tutor_id')->references('id')->on('tutores');
            $table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('reticula_id')->references('id')->on('reticulas');
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });

        Schema::create('tarea_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('tarea_id')->unsigned();
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('tarea_id')->references('id')->on('tareas');
        });

        Schema::create('materia_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('materia_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumnos');
    }
}
