<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

    protected $fillable = ['id', 'name', 'ap_paterno', 'ap_materno', 'tel', 'email', 'sexo', 'edad'];

    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }
}
