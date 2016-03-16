<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Alumno;
use App\Rol;
use App\Institucion;
use Laracasts\Flash\Flash;
use App\Administrador;


class AlumnosController extends Controller
{
    public function index()
    {


        if( Session::has('id') ){
           $alumnos = Alumno::orderBy('name')->paginate(3);
            return view('alumnos.index', ['alumnos' => $alumnos]);
      
        }else{
            return redirect('/alumno/login');
        }
    }

    public function getLogin()
    {        
        return view('alumnos.login');
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
            return redirect()->route('admin.login');
        } else{
            session(['id' => $alumno->id]);
            session(['name' => $alumno->name]);
            session(['email' => $alumno->email]);            
            return redirect('/alumno/panel');
        }

    }

    public function getLogout()
    {
        Session::flush();
        Session::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/alumno/login');
    }
    
    public function create()
    {
        if(Session::has('id')){
            $roles = Rol::orderBy('name', 'ASC')->lists('name', 'id');  
            $instituciones = Institucion::orderBy('name', 'ASC')->lists('name','id');

            return view('alumnos.create', ['roles' => $roles, 'instituciones' => $instituciones]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    
    }
    
    public function store(Request $request)
    {
        $alumno = new Alumno($request->all());
        $alumno->reticula_id = 1;
       
        $alumno->save();

        Flash::success('El Alumno ' . $alumno->name. ' ha sido creado con exito');
        return redirect()->route('/alumno/panel');
    }

    public function show()
    {

    }
    public function edit($id)
    {
        if(Session::has('id')){            
            $alumno = Alumno::find($id);  
            /*$alumno->materia();
         
            $materia = Materia::orderBy('name', 'ASC')->lists('name', 'id'); */
            

            $roles = Rol::orderBy('name', 'ASC')->lists('name', 'id');    
            return view('alumnos.edit', ['alumno' => $alumno, 'roles' => $roles]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    public function update(Request $request, $id )
    {
        $alumno = Alumno::find($id);
        $alumno->fill($request->all());
        $alumno->save();

        Session::flash('message', 'El Alumno ' . $alumno->name . ' ha sido editado correctamente');
        return redirect('/alumno/panel');
    }
    
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        Session::flash('message', 'El Alumno' .$alumno->name . ' se ha Eliminado Correctamente');
       return redirect('/alumno/panel');

    }   

}
