<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';

    protected $fillable = ['id', 'name', 'fecha_aplicacion', 'duracion', 'materia_id', 'docente_id'];

	public function preguntas()
	{
	  	return $this->hasMany('App\Pregunta');
	}

	public function repuestas()
	{
	  	return $this->hasMany('App\Respuesta');
	}

    public function docente()
    {
        return $this->belongsTo('App\Docente');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }

    public function alumnos()
    {
        return $this->belongsToMany('App\Alumno');
    }

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo');
    }

    public function tipos()
    {
        return $this->belongsToMany('App\Tipo');
    }
}
