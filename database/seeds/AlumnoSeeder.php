<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        DB::table('alumnos')->insert([
        	'matricula' => '5511500115', 
        	'name' => 'Gelipe', 
        	'user' => 'felipe', 
        	'password' => bcrypt('felipe'), 
        	'ap_paterno' => 'Guzman', 
        	'ap_materno' => 'Cortez', 
        	'direccion' => 'Villahermosa,centro', 
        	'tel' => '995486223', 
        	'email' => 'felip@felipe.com', 
        	'avatar' => 's', 
        	'sexo' => 'Masculino', 
        	'edad' => '23', 
        	'reticula_id' => 1,
        	'institucion_id' => 1, 
        	'rol_id' => 4, 
        	'grupo_id' => 1

        	]);
    }
}
