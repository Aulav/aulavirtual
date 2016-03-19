@extends('plantillas.main')
@section('title', 'Materias') 

@section('contenido')	
	<div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
        	href="{{ route('materia.panel.create')}}">
        		Crear Materia
        </a>        
    </div>
    <br>
    @include('admins.materias.partials.table')
    <div class="row">
    	<div class="col s12 center">
    		{{ $materias->render() }}
    	</div>
    </div>
@endsection