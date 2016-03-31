@extends('plantillas.main')
@section('title', 'Crear nuevo Administrador')

@section('menu')
  @include('plantillas.partes.menu')
@endsection


@section('contenido')
	<div class="row">
	<h1 class="center flow-text">Registrar un Nuevo Administrdor</h1>
    {!! Form::open(['route' => 'admin.paneladmin.store', 'method' => 'POST', 'files' => true]) !!}
      <div class="row">
        <div class="input-field col s4">
        	<i class="material-icons prefix">school</i>
        	{!! Form::label('name', 'Nombre del admin', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s4">	
        	{!! Form::label('ap_paterno', 'Apellido Paterno:', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('ap_paterno', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Paterno', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s4">
        	{!! Form::label('ap_materno', 'Apellido Materno', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('ap_materno', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Materno', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
        	<i class="material-icons prefix">vpn_key</i>
        	{!! Form::label('direccion', 'Dirección', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('direccion', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">phone</i>
        	{!! Form::label('tel', 'Telefono', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('tel', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la telefono', 'id' => 'icon-prefix']) !!}
        </div>      
      </div>
      <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">email</i>
          	{!! Form::label('email', 'Correo', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('email', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="row">          
            <div class="input-field col s16 m3">                
                {!! Form::select('sexo',['Femenino', 'Masculino'], null,['placeholder' =>'Selecciona su sexo','required']) !!}
             </div>
             <div class="input-field col s3">
                {!!Form::label('Edad','Edad',['for'=> 'icon-prefix'])!!}
                {!! Form::number('edad', 'value');!!}
             </div>
        </div>
      </div>
      <!--<div class="row">
	    <div class="input-field col s12">
	     	<div class="file-field input-field">
		    	<div class="btn">
		        <span>Avatar</span>
		    	{!! Form::file('avatar') !!}
		    	</div>
		    	<div class="file-path-wrapper">
		        	<input class="file-path validate" type="text" placeholder="Suba aquí foto del Docente">
		      	</div>
    		</div>          	
        </div>
      </div>-->
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Crear Administrador', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection

