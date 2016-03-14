<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';

    protected $fillable = ['id', 'name', 'clave_materia', 'numero_unidades'];

    public function tareas()
    {
    	return $this->hasMany('App\Tarea');
    }

    public function examenes()
    {
        return $this->hasMany('App\Examen');
    }

    public function alumnos()
    {
    	return $this->belogsToMany('App\Alumno');
    }

    public function docentes()
    {
    	return $this->belogsToMany('App\Docente');
    }

    public function grupos()
    {
    	return $this->belogsToMany('App\Grupo');
    }

    public function reticulas()
    {
    	return $this->belogsToMany('App\Reticula');
    }
    
}
