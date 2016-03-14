<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';

    protected $fillable = ['id', 'matricula', 'name', 'user', 'password', 'ap_paterno', 'ap_materno', 'direccion', 'tel', 'email', 'avatar', 'sexo', 'edad', 'institucion_id', 'rol_id'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
    }

    public function examenes()
    {
        return $this->hasMany('App\Examen');
    }

    public function materias()
    {
    	return $this->belongsToMany('App\Materia');
    }

    public function tareas()
    {
        return $this->belongsToMany('App\Tarea');
    }

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo');
    }
}
