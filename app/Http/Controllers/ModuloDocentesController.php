<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Docente;
use App\Rol;
use App\Institucion;


class ModuloDocentesController extends Controller
{
	public function index()
	{
	    if( Session::has('id') ){
	        return view('docentes.index');
	    }
	    else
	    {
	    Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
	    return redirect('/docente/login'); 
	    }
	}
	 public function getLogin()
    {        
        return view('docentes.login');
    }

    public function getAcceso( Request $request )
    {        
        $this->validate(
            $request, [
                'email'     => 'required|email',
                'password'  => 'required',
            ]
        );

        $docente = Docente::where('email', '=', $request->input('email'))
                            ->where('password', '=', $request->input('password'))
                            ->first();
        
        if( sizeof( $docente ) == 0 ){
            Session::flash('message', 'Los datos ingresados son incorrectos');
            return redirect()->route('docente.login');
        } else{
            Session::put(['id' => $docente->id]);
            Session::put(['name' => $docente->name]);
            Session::put(['email' => $docente->email]); 
            Session::put(['rol' => $docente->rol_id]); 

            return redirect('/docente/inicio');
        }

    }

    public function getLogout()
    {
        Session::flush();
        Session::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/docente/login');
    }
    public function calificaciones()
    {
        return view('docentes.viewcalificacion');
    }
    public function tareas()
    {
        return view('docentes.viewtareas');
    }
    public function asistencia()
    {
        return view('docentes.viewasistencia');
    }
    public function examenes()
    {
        return view('docentes.viewexamenes');
    }
    public function tareasentregadas()
    {
        return view('docentes.viewtaentregadas');
    }
    public function calendario()
    {
        return view('alumnos.calendario.index');
    }
    
}
