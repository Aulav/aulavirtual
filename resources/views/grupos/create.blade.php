@extends('plantillas.main')
@section('title', 'Crear nuevo grupo')

@section('contenido')
	<div class="row">
	<h1 class="center flow-text">Registrar nuevo grupo</h1>
    {!! Form::open(['route' => 'grupo.panel.store', 'method' => 'POST']) !!}
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">group</i>
        	{!! Form::label('name', 'Nombre del grupo (clave)', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">vpn_key</i>
        	{!! Form::label('grado', 'Grado', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('grado', null, ['class' => 'validate', 'placeholder' => 'Escriba la clave', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">person</i>
        	{!! Form::label('numero_alumnos', '´Número de alumnos', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('numero_alumnos', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el número de alumnos', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	{!! Form::select('institucion_id', $instituciones, null,  ['class' => 'validate', 'placeholder' => 'Seleccione la institución a la que pertenece este grupo']) !!}
        </div>
      </div>
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Crear grupo', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection