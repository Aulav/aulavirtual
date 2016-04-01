@extends('plantillas.main')
@section('title', 'Crear nuevo Administrador')
@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')

	<div class="row card">

	<h1 class="center flow-text">Crear Cuenta</h1>
  
    {!! Form::open(['route' => 'auth.register', 'method' => 'POST', ]) !!}
   
      <div class="row">
        <div class="input-field col s12">
        	<i class="material-icons prefix">school</i>
        	{!! Form::label('name', 'Nombre de Usuario', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre de Usuario', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons">email</i>
          {!! Form::label('email', 'Escribe el Email', ['for' => 'icon-prefix'])!!}
          {!! Form::email('email',null,['class' => 'validate', 'placeholder' => 'Escribe el Correo Electronico','id' => 'icon-prefix'])!!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">school</i>
        	{!! Form::label('password', 'Contraseña', ['for' => 'icon-prefix']) !!}
        	{!! Form::password('password', null, ['class' => 'validate', 'placeholder' => 'Contraseña', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">school</i>
          {!! Form::label('password_confirmation', 'Contraseña', ['for' => 'icon-prefix']) !!}
          {!! Form::password('password_confirmation', null, ['class' => 'validate', 'placeholder' => 'Confirmar Contraseña', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
    </div>
      
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Crear Administrador', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection

