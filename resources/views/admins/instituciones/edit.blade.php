@extends('plantillas.main')
@section('title', 'Editar la institución ' . $institucion->name)

@section('contenido')
    @include('admins.instituciones.partials.migas')
	<div class="row">
    	<h1 class="center flow-text">Editar institución {{ $institucion->name }}</h1>
        {!! Form::model($institucion, ['route' => ['institucion.panel.update', $institucion], 'method' => 'PUT', 'files' => true]) !!}
            @include('admins.instituciones.partials.form')            
            <div class="row">
            	<div class="col s12">
              		{!! Form::submit('Editar institución', ['class' => 'btn']) !!}
            	</div>  
            </div>
        {!! Form::close(); !!}
    </div>
@endsection