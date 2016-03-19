<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Administrador;
use App\Grupo;
use App\Institucion;
use App\Materia;
use App\Rol;

class MateriasController extends Controller
{
        public function index()
    {
    	if( Session::has('id') ){    		
            $materias = Materia::orderBy('id', 'DESC')->paginate(3);
            return view('admins.materias.index', ['materias' => $materias]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function create()
    {
        if(Session::has('id')){
        	$materias = Materia::orderBy('name', 'ASC')->lists('name', 'id');
            return view('admins.materias.create', ['materias' => $materias]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'name'       	   => 'required',
                'clave_materia'    => 'required',
                'numero_unidades'  => 'integer',
            ]
        );

        $materia = new Materia($request->all());
        $materia->save();

        Session::flash('message', $materia->name . ' ha sido creada correctamente');
        return redirect('/materia/panel');

    }

    public function show()
    {

    }

    public function edit( $id )
    {
    	if(Session::has('id')){
    		$materia = Materia::find($id);
            return view('admins.materias.edit', ['materia' => $materia]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function update( Request $request, $id )
    {
    	$this->validate(
            $request, [
                'name'       	   => 'required',
                'clave_materia'    => 'required',
                'numero_unidades'  => 'integer',
            ]
        );

    	$materia = Materia::find($id);
    	$materia->fill($request->all());
    	$materia->save();

    	Session::flash('message', 'La materia ' . $materia->name . ' ha sido editada correctamente');
    	return redirect('/materia/panel');
    }
    
    public function destroy( $id )
    {
    	$materia = Materia::find($id);
    	dd($materia);
    	$materia->delete();
    }
}
