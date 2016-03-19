<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('administradores_id')->unsigned()->nullable();
            $table->integer('docentes_id')->unsigned()->nullable();
            $table->integer('alumnos_id')->unsigned()->nullable();

            $table->foreign('administradores_id')->references('id')->on('images');
            $table->foreign('docentes_id')->references('id')->on('docentes');
            $table->foreign('alumnos_id')->references('id')->on('alumnos');
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
        Schema::drop('images');
    }
}
