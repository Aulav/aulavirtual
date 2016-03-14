<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Alumno;

class AlumnosController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
            return view('alumnos.index');
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
        
    }
    
    public function store(Request $request)
    {

    }

    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    
    public function destroy()
    {

    }   

}
