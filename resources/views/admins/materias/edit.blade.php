@extends('plantillas.main')
@section('title', 'Editar materia ' . $materia->name)

@section('contenido') 
    @include('admins.materias.partials.migas')
	<div class="row">
    	<h1 class="center flow-text">Editar materia {{ $materia->name }}</h1>
        {!! Form::model($materia, ['route' => ['materia.panel.update', $materia], 'method' => 'PUT']) !!}
            @include('admins.materias.partials.form')
            <div class="row">
            	<div class="col s12">
              		{!! Form::submit('Editar materia', ['class' => 'btn']) !!}
            	</div>  
            </div>
        {!! Form::close(); !!}
    </div>
@endsection