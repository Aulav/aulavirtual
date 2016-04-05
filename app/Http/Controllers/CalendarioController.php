<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evento;

class CalendarioController extends Controller
{
   public function index()
   {
    //return view('alumnos.calendario.index')->with('data', $data);

   }
    	public function evento()
    	{
    	$data = array();//declaramos un array que va a contener datos
    	$id = Evento::all()->lists('id');//listamos todos los id de los eventos
    	$lugar = Evento::all()->lists('lugar');
    	$fecha = Evento::all()->lists('fecha');
    	$count = count($id);//contamos los ids obtenidos para saber el numero exacto de eventos 
    	//hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data 
    	for ($i=0; $i < $count; $i++) { 
    		$data[$i] = array(
    			"title" =>$lugar[$i],//title,start,url con campos requeridos
    			"start"	=>$fecha[$i],//por el plugin asi q se le asgna a cada uno el valor
    			"url"	=> "http://localhost:8000/alumno/calendario".$id[$i]
    		//en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
    		);
    	}
    	json_encode($data);//se convierte el array priciapl a un objeto json
    	//return $data;//luego se retorna para usarlo
    	//return view('alumnos.calendario.index',['data' => $data]);
    	//return view('alumnos.calendario.index')->with('data', $data);
    	
    	return view('alumnos.calendario.index', ['data', $data]);
    		//return view('alumnos.calendario.index');
    	}
   
    
}
