<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = ['id', 'matricula', 'name', 'user', 'password', 'ap_paterno', 'ap_materno', 'direccion', 'tel', 'email', 'avatar', 'sexo', 'edad', 'tutor_id', 'institucion_id', 'rol_id', 'grupo_id'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
    }

    public function reticula()
    {
        return $this->belongsTo('App\Reticula');
    }

    public function tutor()
    {
        return $this->belongsTo('App\Tutor');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Grupo');
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
