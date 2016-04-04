<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Docente;
use App\Alumno;
use App\Rol;
use App\Institucion;


class ModuloAlumnoController extends Controller
{
	public function index()
	{
		return view('/alumnos.index');
	}
     public function getLogin()
	
    {        
        return view('/alumnos.login');
    }

    public function getAcceso( Request $request )
    {        
        $this->validate(
            $request, [
                'email'     => 'required|email',
                'password'  => 'required',
            ]
        );

        $alumno = Alumno::where('email', '=', $request->input('email'))
                          ->where('password', '=', $request->input('password'))
                          ->first();
        
        if( sizeof( $alumno ) == 0 ){
            Session::flash('message', 'Los datos ingresados son incorrectos');
            return redirect()->route('alumno.login');
        } else{
            Session::put(['id' => $alumno->id]);
            Session::put(['name' => $alumno->name]);
            Session::put(['email' => $alumno->email]);  
            Session::put(['rol'	=> $alumno->rol_id]);  
                    
            return redirect('/alumno/inicio');
        }

    }

    public function getLogout()
    {
        Session::flush();
        Session::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/alumno/login');
    }


   public function index2()
    {
        return view('/alumnos.index-dinamico');
    }

    public function calificacion()
    {
        return view('/alumnos.calificacion');
    }

    public function tareas()
    {
        return view('/alumnos.tareas');
    }   
 
}
