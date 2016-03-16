<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Administrador;
use App\Institucion;
use App\Rol;
use App\Docente;

class AdminsController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
            $admins = Administrador::orderBy('name')->paginate(3);
            return view('admins.administradores.index', ['admins' => $admins]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function getLogin()
    {        
        return view('admins.login');
    }

    public function getAcceso( Request $request )
    {        
        $this->validate(
            $request, [
                'email'     => 'required|email',
                'password'  => 'required',
            ]
        );

        $administrador = Administrador::where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->first();
        
        if( sizeof( $administrador ) == 0 ){
            Session::flash('message', 'Los datos ingresados son incorrectos');
            return redirect()->route('admin.login');
        } else{
            Session::put(['id' => $administrador->id]);
            Session::put(['name' => $administrador->name]);
            Session::put(['email' => $administrador->email]);
            Session::put(['rol' => $administrador->rol_id]);            
            return redirect('/admin/panel');
        }

    }

    public function getLogout()
    {
        Session::flush();
        Session::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/admin/login');
    }
    
    public function create()
    {
        if(Session::has('id')){            
            return view('admins.administradores.create');
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
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

        $admin = new administrador($request->all());
        $admin->institucion_id = 1;
        $admin->rol_id = 1;
        $admin->save();

        Session::flash('message', $admin->name . ' ha sido creado correctamente');
        return redirect('/admin/panel');
    }

    public function show()
    {
        
    }

    public function edit( $id )
    {
        if(Session::has('id')){
            $admin = administrador::find($id);
            return view('admins.administradores.edit', ['admin' => $admin]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    public function update(Request $request, $id)
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

        $admin = administrador::find($id);
        $admin->fill($request->all());
        $admin->institucion_id = 1;
        $admin->rol_id = 1;
        $admin->save();

        Session::flash('message', 'El Administrador ' . $admin->name . ' ha sido editado correctamente');
        return redirect('/admin/paneladmin');
    }
    
    public function destroy($id)
    {
        $admin = administrador::find($id);
        $admin->delete();
        Session::flash('message', 'El administrador ' . $admin->name . ' ha sido eliminado correctamente');
        return redirect('/admin/paneladmin');
    }
    
}