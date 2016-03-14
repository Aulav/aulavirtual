<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradores';

    protected $fillable = ['id', 'name', 'user', 'password', 'ap_paterno', 'ap_materno', 'direccion', 'tel', 'email', 'avatar', 'sexo', 'institucion_id', 'rol_id'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
    }
}
