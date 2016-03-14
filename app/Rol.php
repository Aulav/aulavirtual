<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['id', 'name'];

    public function administrador()
    {
    	return $this->hasOne('App\Administrador');
    }

    public function docente()
    {
    	return $this->hasOne('App\Docente');
    }

    public function alumno()
    {
    	return $this->hasOne('App\Alumno');
    }
}
