<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';

    protected $fillable = ['id', 'respuesta', 'respuesta_correcta', 'valor', 'pregunta_id'];

    public function prefunta()
    {
    	return $this->belongsTo('App\Pregunta');
    }
}
