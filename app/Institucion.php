<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones';

    protected $fillable = ['id', 'name', 'logo', 'clave', 'direccion', 'tel', 'email', 'web'];
}
