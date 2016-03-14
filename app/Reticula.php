<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reticula extends Model
{
    protected $table = 'reticulas';

    protected $fillable = ['id', 'name', 'numero_semestres', 'numero_materias', 'materia_id', 'grupo_id'];

    public function materias()
    {
    	return $this->belongsToMany('App\Materia');
    }

    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }
}
