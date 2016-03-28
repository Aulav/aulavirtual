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
use App\Administrador;


class ImportController extends Controller
{
	public function index()
    {
        

        return view('admins.profile');
       
    }
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
 	public function profile()
    {
        return view('admins.profile');
       
    }
    public function updateProfile(Request $request)
    {
       /*$this->validate(
            $request, [
                'avatar'        => 'image',
            ]
        );*/
        if($request->file('avatar'))
        {
            $file = $request->file('avatar');
          
            $name = 'perfil_'. time() . '.' .$file->getClientOriginalExtension();
            $path = public_path() . '/images/perfil/';
            $file->move($path, $name);
            //dd($file);
            
        }
            $admin = new Administrador();
            $admin->where('email', '=', Session::get('email'))->update(['avatar' => '/images/perfil/'.$name]);
           /* $user->where('email', '=', Auth::user()->email)->update(['perfiles' => 'perfiles/'.$name]);*/
           Session::flash('message', 'Su imagen de perfil ah sido cambiada con exito');
            return redirect('/admin/profile')->with('admin',$admin);

        
        //return redirect('/admin/paneladmin');
        
    }
}
