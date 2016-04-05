<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Examen;
use Session;
use App\Pregunta;



class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       if( Session::has('id') ){           
            $examenes = Examen::orderBy('id', 'DESC')->paginate(6);
            $preguntas = Pregunta::orderBy('id')->paginate(5);

            return view('admins.preguntas.create', ['preguntas' => $preguntas, 'examenes' => $examenes, ]);
        }else{
            Session::flash('message', 'Necesita iniciar sesión para acceder a su panel personal');
            return redirect('/admin/login');

       
        return view('admins.preguntas.create');
        

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.preguntas.create');
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
                'pregunta'  => 'required',
                'examen_id' => 'required',
                'resp1'     => 'required',
                'resp2'     => 'required',
                'resp3'     => 'required',
                'resp4'     => 'required',               
            ]
        );

        $preguntas = new pregunta($request->all());
        $preguntas->save();

        Session::flash('message', $preguntas->name . ' ha sido creado correctamente');
        return redirect('/pregunta/panel');
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
        //
    }
}
