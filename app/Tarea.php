<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';

    protected $fillable = ['id', 'name', 'descripcion', 'fecha_entrega', 'calificacion', 'material_didactico', 'materia_id'];

    public function tarea()
    {
    	return $this->belongsTo('App\Materia');
    }

    public function alumnos()
    {
    	return $this->belongsToMany('App\Alumno');
    }

    public function docentes()
    {
    	return $this->belongsToMany('App\Docente');
    }

    public function grupos()
    {
    	return $this->belongsToMany('App\Grupo');
    }
}
