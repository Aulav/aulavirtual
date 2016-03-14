@extends('plantillas.main')
@section('title', 'Editar la institución ' . $institucion->name)

@section('contenido')
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper teal darken-1">
                  <div class="col s12">
                    <a href="{{ asset('/admin/panel') }}" class="breadcrumb">Atrás</a>
                    <span class="breadcrumb">Editar institución</span>
                  </div>
                </div>
            </nav>
        </div>
    </div>
	<div class="row">
	<h1 class="center flow-text">Editar institución {{ $institucion->name }}</h1>
    {!! Form::open(['route' => ['institucion.panel.update', $institucion], 'method' => 'PUT', 'files' => true]) !!}
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">school</i>
        	{!! Form::label('name', 'Nombre de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('name', $institucion->name, ['class' => 'validate', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">vpn_key</i>
        	{!! Form::label('clave', 'Clave de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('clave', $institucion->clave, ['class' => 'validate', 'placeholder' => 'Escribe aquí la clave', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">home</i>
        	{!! Form::label('direccion', 'Dirección de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('direccion', $institucion->direccion, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
        </div>      
        <div class="input-field col s6">
        	<i class="material-icons prefix">phone</i>
        	{!! Form::label('tel', 'Teléfono', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('tel', $institucion->tel, ['class' => 'validate', 'placeholder' => 'Escribe aquí el teléfono', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">email</i>
          	{!! Form::label('email', 'Correo de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('email', $institucion->email, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">web</i>
          	{!! Form::label('web', 'Página web de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('web', $institucion->web, ['class' => 'validate', 'placeholder' => 'Escribe aquí la página web', 'id' => 'icon-prefix']) !!}
        </div>
      </div>     
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Editar institución', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection