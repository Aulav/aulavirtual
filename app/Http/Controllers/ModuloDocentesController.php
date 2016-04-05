<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Docente;
use App\Rol;
use App\Institucion;
use App\Materia;
use App\Alumno;
use App\Examen;
use App\Pregunta;


class ModuloDocentesController extends Controller
{
	public function index()
	{
	    if( Session::has('id') ){
            //$materias = Materia::orderBy('name', 'ASC')->lists('name', 'id');
            $materias = Materia::orderBy('name', 'ASC')->paginate(3);
            $alumnos = Alumno::orderBy('name')->paginate(3);
            
	        return view('docentes.index')->with('materias', $materias)->with('alumnos', $alumnos);
            //return view('admins.materias.index', ['materias' => $materias]);
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
         $alumnos = Alumno::orderBy('name')->paginate(3);
        return view('docentes.viewcalificacion')->with('alumnos', $alumnos);
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
        $examenes = Examen::orderBy('id', 'DESC')->paginate(6);
      
        return view('docentes.examenes')->with('examenes', $examenes);
    }
    public function verexamenes()
    {
        $examenes = Examen::orderBy('id', 'DESC')->paginate(6);
        $preguntas = Pregunta::orderBy('id')->paginate(5);
        return view('docentes.viewexamenes')->with('examenes', $examenes)->with('preguntas', $preguntas);
    }
    public function tareasentregadas()
    {
        return view('docentes.viewtaentregada');
    }
    public function calendario()
    {

        return view('alumnos.calendario.index');
    }
    public function materia()
    {
        $alumnos = Alumno::orderBy('name')->paginate(5);
        return view('docentes.viewmateria')->with('alumnos', $alumnos);
    }
    public function alumnos()
    {
        $alumnos = Alumno::orderBy('name')->paginate(3);
        return view('docentes.viewalumnos')->with('alumnos', $alumnos);
    }
    public function alumnoedit($id)
    {
        if(Session::has('id')){            
            $alumnos = Alumno::find($id);  
            /*$alumno->materia();
         
            $materia = Materia::orderBy('name', 'ASC')->lists('name', 'id'); */
            return view('admins.alumnos.edit', ['alumnos' => $alumnos, 'roles' => $roles]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/docente/login');
        }
    }
    public function profile()
    {
        return view('docentes.profile');
    }
}
