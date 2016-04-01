<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('activo')->default(0);
            $table->string('perfiles');
            $table->string('confirm_token', 100);
            $table->integer('roles_id')->unsigned();
            $table->integer('docente_id')->unsigned()->nullable();
            $table->integer('alumno_id')->unsigned()->nullable();
            $table->integer('administrador_id')->unsigned()->nullable();
            

            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('administrador_id')->references('id')->on('administradores');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
