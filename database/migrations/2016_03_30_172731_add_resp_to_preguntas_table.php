<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRespToPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('preguntas', function (Blueprint $table) {
            $table->string('resp1');
            $table->string('resp2');
            $table->string('resp3');
            $table->string('resp4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preguntas', function (Blueprint $table) {
            //
        });
    }
}
