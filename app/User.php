<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function roles()
    {
        return $this->hasOne('App\Role');
    }
    public function administradores()
    {
        return $this->hasOne('App\Administrador');
    }
     public function alumnos()
    {
        return $this->hasOne('App\Alumno');
    }
     public function docentes()
    {
        return $this->hasOne('App\Docente');
    }
}
