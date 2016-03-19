@extends('plantillas.main')
@section('title', 'Crear nuevo grupo')

@section('contenido')
    @include('admins.grupos.partials.migas')
    <div class="row">
    	<h1 class="center flow-text">Registrar nuevo grupo</h1>
        {!! Form::open(['route' => 'grupo.panel.store', 'method' => 'POST']) !!}
            @include('admins.grupos.partials.form')
            <div class="row">
			   	<div class="col s12">
			   		{!! Form::submit('Crear grupo', ['class' => 'btn']) !!}
			   	</div>  
			</div>
        {!! Form::close(); !!}
    </div>
@endsection