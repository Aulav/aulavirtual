@extends('plantillas.main')
@section('title', 'Materias')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')	
	<div class="row col s3">
        <a class="waves-effect waves-light btn btn-custom blue-grey darken-4  z-depth-5 left" 
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