<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('id');
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
            $table->integer('institucion_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->timestamps();

            $table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('administradores');
    }
}
