<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('respuesta');
            $table->boolean('correcta')->default(0);
            $table->integer('pregunta_id')->unsigned();
            $table->timestamps();

            $table->foreign('pregunta_id')->references('id')->on('preguntas_tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('respuestas_tarjetas');
    }
}
