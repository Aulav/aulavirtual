@extends('plantillas.main')
@section('title', 'Grupos') 

@section('contenido')	
	<div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
        	href="{{ route('grupo.panel.create')}}">
        	Crear Grupo
        </a>        
    </div>
    <br>
    @include('admins.grupos.partials.table')
    <div class="row">
    	<div class="col s12 center">
    		{{ $grupos->render() }}
    	</div>
    </div>
@endsection