<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaTarjeta extends Model
{
    protected $table = 'preguntas_tarjetas';
    protected $fillable = ['pregunta', 'tarjeta_id'];

    public function respuesta()
    {
    	return $this->hasOne('App\RespuestaTarjeta');
    }

    public function tarjeta()
    {
    	return $this->belongsTo('App\Tarjeta');
    }
}
