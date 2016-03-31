<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Docente;
use App\Rol;
use Session;
use App\Examen;

class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('examen.index');
        if( Session::has('id') ){           
            $examenes = Examen::orderBy('id', 'DESC')->paginate(6);
            $materias = Materia::orderBy('name', 'ASC')->lists('name', 'id');  
            $docentes = Docente::orderBy('name', 'ASC')->lists('name','id');

            return view('admins.examenes.index', ['examenes' => $examenes, 'materias' => $materias, 'docentes' => $docentes]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session::has('id')){
            $materias = Materia::orderBy('name', 'ASC')->lists('name', 'id');  
            $docentes = Docente::orderBy('name', 'ASC')->lists('name','id');

            return view('admins.examenes.index', ['examenes' => $examenes, 'materias' => $materias, 'docentes' => $docentes]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'name'              => 'required',
                'fecha_aplicacion'  => 'required',
                'duracion'          => 'required',
                'materia_id'        => 'required',
                'docente_id'        => 'required',              
            ]
        );

        $examenes = new examen($request->all());
        $examenes->save();

        Session::flash('message', $examenes->name . ' ha sido creado correctamente');
        return redirect('/examen/panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examenes = Examen::find($id);
        $examenes->delete();
        Session::flash('message', 'El examen ' . $examenes->name . ' ha sido eliminado correctamente');
        return redirect('/examenes/panel');
    }
}
