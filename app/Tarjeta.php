<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = 'tarjetas';
    protected $fillable = ['id', 'titulo', 'descripcion', 'grupo_id', 'administrador_id', 'docente_id'];

    public function tarjeta_pregunta()
    {
    	return $this->hasMany('App\PreguntaTarjeta');
    }

    public function administrador()
    {
    	return $this->belongsTo('App\Administrador');
    }

    public function docente()
    {
		return $this->belongsTo('App\Docente');
    }

    public function grupo()
    {
    	return $this->belongsTo('App\Grupo');
    }
}
