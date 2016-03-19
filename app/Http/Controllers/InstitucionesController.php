<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Administrador;
use App\Institucion;
use App\Rol;

class InstitucionesController extends Controller
{
    public function index()
    {
    	if(Session::has('id')){
            $instituciones = Institucion::orderBy('name','id')->paginate(5);

            return view('admins.instituciones.index')->with('instituciones', $instituciones);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
     
    }
    
    public function create()
    {
        if(Session::has('id')){
            return view('admins.instituciones.create');
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'name'       => 'required|min:4',
                'clave'      => 'required|min:3',
                'direccion'  => 'required|min:5',
                'email'      => 'email',
                'logo'       => 'required',
            ]
        );

        if($request->file('logo')){
            $file = $request->file('logo');
            $name = 'institucion_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/instituciones/';
            $file->move($path, $name);
        }

        $institucion = new Institucion($request->all());
        $institucion->logo = '/mages/instituciones/' . $name;
        $institucion->save();
        Session::flash('message', $institucion->name . ' ha sido creada correctamente');
        return redirect('/admin/panel');

    }

    public function show()
    {

    }

    public function edit( $id )
    {
    	if(Session::has('id')){            
    		$institucion = Institucion::find($id);    	
            return view('admins.instituciones.edit', ['institucion' => $institucion]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function update( Request $request, $id )
    {
        $this->validate(
            $request, [
                'name'       => 'required|min:4',
                'clave'      => 'required|min:3',
                'direccion'  => 'required|min:5',
                'email'      => 'email',
            ]
        );
        
    	$institucion = Institucion::find($id);
    	$institucion->fill($request->all());
    	$institucion->save();

    	Session::flash('message', 'La institución ' . $institucion->name . ' ha sido editada correctamente');
    	return redirect('/admin/panel');
    }
    
    public function destroy( $id )
    {
    	$institucion = Institucion::find($id);
    	dd($institucion);
    	$institucion->delete();
    }
 
}
