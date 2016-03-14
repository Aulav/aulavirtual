<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Administrador;
use App\Grupo;
use App\Institucion;
use App\Rol;

class GruposController extends Controller
{
    public function index()
    {
    	if( Session::has('id') ){    		
            $grupos = Grupo::orderBy('name')->paginate(3);
            return view('grupos.index', ['grupos' => $grupos]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function create()
    {
        if(Session::has('id')){
        	$instituciones = Institucion::orderBy('name', 'ASC')->lists('name', 'id');        	
            return view('grupos.create', ['instituciones' => $instituciones]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'name'       	  => 'required',
                'grado'      	  => 'required',
                'numero_alumnos'  => 'integer',
                'institucion_id'  => 'required',
            ]
        );

        $grupo = new Grupo($request->all());
        $grupo->save();

        Session::flash('message', $grupo->name . ' ha sido creado correctamente');
        return redirect('/grupo/panel');

    }

    public function show()
    {

    }

    public function edit( $id )
    {
    	if(Session::has('id')){
    		$grupo = Grupo::find($id);
            return view('grupos.edit', ['grupo' => $grupo]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function update( Request $request, $id )
    {
    	$this->validate(
            $request, [
                'name'       	  => 'required',
                'grado'      	  => 'required',
                'numero_alumnos'  => 'integer',
            ]
        );

    	$grupo = Grupo::find($id);
    	$grupo->fill($request->all());
    	$grupo->save();

    	Session::flash('message', 'El grupo ' . $grupo->name . ' ha sido editada correctamente');
    	return redirect('/grupo/panel');
    }
    
    public function destroy( $id )
    {
    	$institucion = Institucion::find($id);
    	dd($institucion);
    	$institucion->delete();
    }
}
