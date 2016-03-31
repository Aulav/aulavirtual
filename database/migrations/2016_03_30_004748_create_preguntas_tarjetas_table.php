<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta');
            $table->integer('tarjeta_id')->unsigned();
            $table->timestamps();

            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preguntas_tarjetas');
    }
}
