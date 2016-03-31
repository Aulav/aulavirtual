<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaTarjeta extends Model
{
    protected $table = 'respuestas_tarjetas';
    protected $fillable = ['respuesta', 'pregunta_id'];

    public function pregunta()
    {
    	return $this->belongsTo('App\PreguntaTarjeta');
    }
}
