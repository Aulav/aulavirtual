<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends Model
{
    use SoftDeletes;

    protected $table = 'docentes';
    protected $dates = ['deleted_at'];
    

    protected $fillable = ['id', 'matricula', 'name', 'user', 'password', 'ap_paterno', 'ap_materno', 'direccion', 'tel', 'email', 'avatar', 'sexo', 'edad', 'institucion_id', 'rol_id'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
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
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function tarjetas()
    {
        return $this->hasMany('App\Tarjeta');
    }
}
