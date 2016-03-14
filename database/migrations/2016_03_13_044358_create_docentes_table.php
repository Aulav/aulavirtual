<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
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
            $table->integer('institucion_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->timestamps();

            $table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->foreign('rol_id')->references('id')->on('roles');
        });

        Schema::create('grupo_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('docente_id')->references('id')->on('docentes');
        });

        Schema::create('tarea_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tarea_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

            $table->foreign('tarea_id')->references('id')->on('tareas');
            $table->foreign('docente_id')->references('id')->on('docentes');
        });

        Schema::create('materia_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('docente_id')->references('id')->on('docentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docentes');
    }
}
