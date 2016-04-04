<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Docente;
use App\Rol;
use App\Institucion;
use App\Administrador;

class DocentesController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
           $docentes = Docente::orderBy('name')->paginate(5);
            return view('admins.docentes.index', ['docentes' => $docentes]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/docente/login');
        }
    }

   
    
    public function create()
    {
       {
        if(Session::has('id')){
            $docentes = docente::orderBy('name', 'ASC')->lists('name', 'id');          
            return view('admins.docentes.create', ['docentes' => $docentes]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    } 
    }
    
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'name'        => 'required',
                'ap_paterno'  => 'required',
                'ap_materno'  => 'required',
                'user'        => 'required',
                'password'    => 'required',
                'tel'         => 'required',
                'email'       => 'required',
                'sexo'        => 'required',  
                
            ]
        );

        $docente = new docente($request->all());
        $docente->institucion_id = 1;
        $docente->rol_id = 2;
        $docente->save();

        Session::flash('message', $docente->name . ' ha sido creado correctamente');
        return redirect('/docente/panel');
    }

    public function show()
    {

    }
    public function edit($id)
    {
        if(Session::has('id')){
            $docente = docente::find($id);
            return view('admins.docentes.edit', ['docente' => $docente]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    public function update( Request $request, $id )
    {
        $this->validate(
            $request, [
                'name'        => 'required',
                'ap_paterno'  => 'required',
                'ap_materno'  => 'required',
                'user'        => 'required',
                'password'    => 'required',
                'tel'         => 'required',
                'email'       => 'required',
                'sexo'        => 'required',
            ]
        );

        $docente = docente::find($id);
        $docente->fill($request->all());
        $docente->institucion_id = 1;
        $docente->rol_id = 2;
        $docente->save();

        Session::flash('message', 'El docente ' . $docente->name . ' ha sido editado correctamente');
        return redirect('/docente/panel');
    }
    
    public function destroy( $id )
    {
        $docente = docente::find($id);
        $docente->delete();
        Session::flash('message', 'El docente ' . $docente->name . ' ha sido eliminado correctamente');
        return redirect('/docente/panel');
        
    }  
    
}
