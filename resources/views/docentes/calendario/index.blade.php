@extends('plantillas.main-docente')
@section('title', 'Calendario de eventos')

@section('menu')
	@include('plantillas.partes.menu-docente')
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
