<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Alumno;
use Maatwebsite\Excel\Facades\Excel;
use App\Book;
use App\BooksImport;
use App\User;

class ImportController extends Controller
{
	public function create()
    {
        if(Session::has('id')){
           
            return view('alumnos.createExcel');
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    
    }


    public function import()
    {
    	return view('alumnos.createExcel');
    }
   public function store(Request $request)
    {
        //manipulacion de Archivos excel
		if($request->file('archivo'))
		{
			$file = $request->file('archivo');
			$name = 'aulavirtual_' .time() . '.' .$file->getClientOriginalExtension();
			$path = public_path() . '/alumnos/';
			$file->move($path, $name);
			$newExcel = 'public/alumnos/' . $name;

		Excel::load($newExcel, function($reader) {
 				
     		foreach ($reader->get() as $alumno) {
     			Alumno::create([
     				'matricula' => $alumno->matricula, 
		        	'name' => $alumno->name, 
		        	'ap_paterno' => $alumno->ap_paterno, 
		        	'ap_materno' => $alumno->ap_materno, 
		        	'direccion' => $alumno->direccion, 
		        	'tel' => $alumno->telefono, 
		        	'email' => $alumno->correo, 
		        	'sexo' => $alumno->sexo, 
		        	'edad' => $alumno->edad, 
		        	'rol_id' => 4,

		        	
     			]);
      		}
		});
		//return User::all();
		Session::flash('message', 'El archivo se ah importado correctamente');
       
        return redirect('/alumno/panel');
		}

		 

		
    }

    
    /*public function import()
    {

    	Excel::load('alumnos.csv', function($reader){
    		foreach ($reader->get() as $alumno) {
    			Alumno::create([
    				'matricula' => $alumno->matricula, 
		        	'name' => $alumno->name, 
		        	/*'user' => $alumno->matricula, 
		        	'password' => $alumno->bcrypt($matricula), 
		        	'ap_paterno' => $alumno->ap_paterno, 
		        	'ap_materno' => $alumno->ap_materno, 
		        	'direccion' => $alumno->direccion, 
		        	'tel' => $alumno->telefono, 
		        	'email' => $alumno->email, 
		        	'sexo' => $alumno->sexo, 
		        	'edad' => $alumno->edad, 
		        	'reticula_id' => 1,
		        	'institucion_id' => 1, 
		        	'rol_id' => 4, 
		        	'grupo_id' => 1
    				]);
    		}
    	});
    	return Alumno::all();
    }*/
}
