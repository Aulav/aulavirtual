<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = ['id', 'name', 'grado', 'numero_alumnos', 'institucion_id'];

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente');
    }

    public function materias()
    {
    	return $this->belongsToMany('App\Materia');
    }

    public function tareas()
    {
        return $this->belongsToMany('App\Tarea');
    }

    public function examenes()
    {
        return $this->belongsToMany('App\Examen');
    }
}
