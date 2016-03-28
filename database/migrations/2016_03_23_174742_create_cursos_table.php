<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('materias_id')->unsigned();           
            $table->timestamps();

            $table->foreign('materias_id')->references('id')->on('materias');
        });

        Schema::create('curso_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
        
        Schema::create('curso_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('docente_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->timestamps();

            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
