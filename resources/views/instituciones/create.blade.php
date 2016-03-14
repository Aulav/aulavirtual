@extends('plantillas.main')
@section('title', 'Crear nueva institución')

@section('contenido')
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper teal darken-1">
                  <div class="col s12">
                    <a href="{{ asset('/admin/panel') }}" class="breadcrumb">Atrás</a>
                    <span class="breadcrumb">Crear institución</span>
                  </div>
                </div>
            </nav>
        </div>
    </div>
	<div class="row">
	<h1 class="center flow-text">Registrar nueva institución</h1>
    {!! Form::open(['route' => 'institucion.panel.store', 'method' => 'POST', 'files' => true]) !!}
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">school</i>
        	{!! Form::label('name', 'Nombre de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">vpn_key</i>
        	{!! Form::label('clave', 'Clave de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('clave', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la clave', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">home</i>
        	{!! Form::label('direccion', 'Dirección de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('direccion', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
        </div>      
        <div class="input-field col s6">
        	<i class="material-icons prefix">phone</i>
        	{!! Form::label('tel', 'Teléfono', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('tel', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el teléfono', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">email</i>
          	{!! Form::label('email', 'Correo de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('email', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">web</i>
          	{!! Form::label('web', 'Página web de la institución', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('web', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la página web', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
	    <div class="input-field col s12">
	     	<div class="file-field input-field">
		    	<div class="btn">
		        <span>Logo de la institución</span>
		    	{!! Form::file('logo') !!}
		    	</div>
		    	<div class="file-path-wrapper">
		        	<input class="file-path validate" type="text" placeholder="Suba aquí el logo institucional">
		      	</div>
    		</div>          	
        </div>
      </div>
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Crear institución', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection