@extends('plantillas.main')
@section('title', 'Crear nueva materia')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
    @include('admins.materias.partials.migas')
    <h1 class="center flow-text">Registrar nueva materia</h1>
    {!! Form::open(['route' => 'materia.panel.store', 'method' => 'POST']) !!}
        @include('admins.materias.partials.form')
        <div class="row">
        	<div class="col s12">
          		{!! Form::submit('Crear materia', ['class' => 'btn']) !!}
        	</div>  
        </div>
    {!! Form::close(); !!}
@endsection