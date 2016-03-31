<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Administrador;
use App\Tarjeta;
use App\PreguntaTarjeta;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarjetas = Tarjeta::orderBy('id', 'DESC')->paginate(5);
        return view('fichas.index', ['tarjetas' => $tarjetas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo::orderBy('id', 'desc')->lists('name', 'id');
        return view('fichas.create', ['grupos' => $grupos ]);
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
                'titulo' => 'required',
                'grupo'  => 'required',                
            ]
        );       
     
        $id_tarjeta = \DB::table('tarjetas')->insertGetId(
            [
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'), 
                'administrador_id' => \Session::get('id'), 
                'grupo_id' => $request->input('grupo'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]
        );

        $preguntas = $request->input('pregunta');
        $respuestas = $request->input('respuesta');

        $id_pregunta = array();
        $i = 0;
        
        foreach ($preguntas as $pregunta) {
            $id_pregunta[] = \DB::table('preguntas_tarjetas')->insertGetId(
                [
                    'pregunta' => $pregunta, 
                    'tarjeta_id' => $id_tarjeta,
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                ]
            );
        }

        foreach ($respuestas as $respuesta) {
            \DB::table('respuestas_tarjetas')->insert(
                [
                    'respuesta' => $respuesta, 
                    'pregunta_id' => $id_pregunta[$i],
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                ]
            );
            $i++;
        }

        return redirect('/ficha/panel');

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
        
    }

    public function getRespuesta(Request $request)
    {
        $num = $request->input('num');
        return view('fichas.preguntas', ['num' => $num]);        
    }

    public function getDetalles($id)
    {
        $tarjeta = \DB::table('tarjetas')
                    ->join('preguntas_tarjetas', 'tarjetas.id', '=', 'preguntas_tarjetas.tarjeta_id')
                    ->join('respuestas_tarjetas', 'preguntas_tarjetas.id', '=', 'respuestas_tarjetas.pregunta_id')
                     ->where('tarjetas.id', '=', $id)
                    ->select('tarjetas.titulo', 'preguntas_tarjetas.pregunta', 'respuestas_tarjetas.respuesta')
                    ->get();
        return view('fichas.detalles', ['tarjeta' => $tarjeta]);
    }
}