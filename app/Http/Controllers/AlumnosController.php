<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\filesystem;
use App\Http\Requests;
use Session;
use App\Alumno;
use App\Rol;
use App\Institucion;
// Import the necessary classes
use Cartalyst\Alerts\Native\Facades\Alert;

// Include the composer autoload file

use App\Administrador;


class AlumnosController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
           $alumnos = Alumno::orderBy('name')->paginate(3);
            return view('admins.alumnos.index', ['alumnos' => $alumnos]);
      
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/alumno/login');
        }
    }

   
    public function create()
    {
        if(Session::has('id')){
            $roles = Rol::orderBy('name', 'ASC')->lists('name', 'id');  
            $instituciones = Institucion::orderBy('name', 'ASC')->lists('name','id');

            return view('admins.alumnos.create', ['roles' => $roles, 'instituciones' => $instituciones]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    
    }
    
    public function store(Request $request)
    {
        $alumno = new Alumno($request->all());
        $alumno->reticula_id = 1;
        $alumno->rol_id = 4;
        $alumno->user = $request->matricula;
        $alumno->user = $request->name;
        /*$alumno->password=bcrypt($request->matricula);*/
       
        $alumno->save();
        Session::flash('message', 'El alumno ' .$alumno->name. ' Ha sido creado Correctamente');
       
        return redirect('/alumno/panel');
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
            return view('admins.alumnos.edit', ['alumno' => $alumno, 'roles' => $roles]);
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
     
        Session::Flash('message', 'El Alumno ' . $alumno->name . ' ha sido editado Exitosamente');
        
        return redirect('/alumno/panel');
    }
    public function getImport()
    {
        return redirect('/alumno/panel/createExcel');
    }
    
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        Session::flash('message', 'El Alumno ' .$alumno->name . ' se ah Eliminado Correctamente');

        Session::flash('message', 'El Alumno' .$alumno->name . ' se ha Eliminado Correctamente');

       return redirect('/alumno/panel');

    }   
    public function alumnoInicio()
    {
        return view('alumnos.index');
    }

     public function alumnoInicio2()
    {
        return view('alumnos.index-dinamico');
    }

}
