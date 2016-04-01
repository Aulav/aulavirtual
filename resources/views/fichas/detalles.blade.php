@extends('plantillas.main')

@section('title', '')

@section('menu')
	@include('plantillas.partes.menu-fichas')
@endsection

@section('contenido')
	<div class="row card z-depth-4">
		<div class="col s12">
        	<p class="flow-text center-align">{{ $tarjeta[0]->titulo }}</p>
		</div>
	</div>
	<div class="row card z-depth-3">
		@for($i = 0; $i < sizeof($tarjeta); $i++ )
	        <div class="col s4 m4 ">
	            <div class="card tarjeta3D">
	            	<div class="back">
	                	<h5 class="title-tarjeta">Respuesta</h5>
	                	<p class="title-tarjeta">{{ $tarjeta[$i]->respuesta }}</p>
	              	</div>
	              	<div class="front valign-wrapper">
	                	<h5 class="title-tarjeta valign">{{ $tarjeta[$i]->pregunta }}</h5>
	              	</div>
	            </div>
	        </div>
		@endfor
    </div>      
@endsection