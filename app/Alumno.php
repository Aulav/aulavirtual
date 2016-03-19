<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use SoftDeletes;

    protected $table = 'alumnos';
    protected $dates = ['deleted_at'];
   

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
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
