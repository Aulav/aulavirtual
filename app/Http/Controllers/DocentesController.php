<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Docente;

class DocentesController extends Controller
{
    public function index()
    {
        if( Session::has('id') ){
            return view('docentes.index');
        }else{
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
            session(['id' => $docente->id]);
            session(['name' => $docente->name]);
            session(['email' => $docente->email]);            
            return redirect('/docente/panel');
        }

    }

    public function getLogout()
    {
        Session::flush();
        Session::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/docente/login');
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
