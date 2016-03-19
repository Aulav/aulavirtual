<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = ['name','administradores_id','docentes_id','alumnos_id'];
    
    public function administrador()
    {
    	return $this->belongsTo('App\Administrador');
    }
    public function docente()
    {
    	return $this->belongsTo('App\Docente');
    }
    public function alumno()
    {
    	return $this->belongsTo('App\Alumno');
    }
}
