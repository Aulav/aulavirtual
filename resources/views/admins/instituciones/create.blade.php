@extends('plantillas.main')
@section('title', 'Crear nueva institución')

@section('contenido')
    @include('admins.instituciones.partials.migas')
	<div class="row">
	<h1 class="center flow-text">Registrar nueva institución</h1>
    {!! Form::open(['route' => 'institucion.panel.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @include('admins.instituciones.partials.form')
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