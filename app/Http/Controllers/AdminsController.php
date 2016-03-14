<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Administrador;
use App\Institucion;
use App\Rol;

class AdminsController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
            $instituciones = Institucion::orderBy('name')->paginate(3);
            return view('admins.index', ['instituciones' => $instituciones]);
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
            return view('admins.create');
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }
    
    public function store(Request $request)
    {
        
    }

    public function show()
    {

    }

    public function edit( $id )
    {

    }

    public function update()
    {

    }
    
    public function destroy()
    {

    }
    
}