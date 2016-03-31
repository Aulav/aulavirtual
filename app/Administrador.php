<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrador extends Model
{
	use SoftDeletes;
    protected $table = 'administradores';
    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'name', 'user', 'password', 'ap_paterno', 'ap_materno', 'direccion', 'tel', 'email', 'avatar', 'sexo', 'institucion_id', 'rol_id'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
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
