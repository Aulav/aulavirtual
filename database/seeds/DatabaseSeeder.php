<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(AlumnoSeeder::class);
        $this->call(RolSeeder::class);
        // $this->call(UserTableSeeder::class);
    }
}
