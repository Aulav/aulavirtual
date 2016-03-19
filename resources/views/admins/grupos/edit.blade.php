@extends('plantillas.main')
@section('title', 'Editar grupo ' . $grupo->name)

@section('contenido')
    @include('admins.grupos.partials.migas')
	<div class="row">
	<h1 class="center flow-text">Editar grupo {{ $grupo->name }}</h1>
    {!! Form::model($grupo, ['route' => ['grupo.panel.update', $grupo], 'method' => 'PUT']) !!}
        @include('admins.grupos.partials.form', array('some' => 'data'))
        <div class="row">
		   	<div class="col s12">
		   		{!! Form::submit('Editar grupo', ['class' => 'btn']) !!}
		   	</div>  
		</div>
    {!! Form::close(); !!}
  </div>
@endsection