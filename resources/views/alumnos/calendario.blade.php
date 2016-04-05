@extends('plantillas.main-alumno2')
@section('title', 'Calendario de eventos')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')

<div class="row">
	<div class="card">
		<div class="col s12">
			<div id="calendar"></div>
		</div>
	</div>
</div>

@endsection
