@extends('plantillas.main')

@section('title', 'Fichas de estudio')

@section('menu')
	@include('plantillas.partes.menu-fichas')	
@endsection

@section('contenido')
	@include('fichas.partials.migas')
	<div class="row">
		<div class="col s12">
			<a class="waves-effect waves-light btn blue-grey darken-4  z-depth-4 left" 
	        	href="{{ route('ficha.panel.create')}}">
	        		Crear tarjeta
	        </a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h4>Tarjetas de estudio</h4>
			<table class="bordered responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Titulo</th>
		              <th data-field="direccion">Descripción</th>
		              <th data-field="telefono">Acciones</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($tarjetas as $tarjeta)
		        	<tr>
		          		<td>
		          			<a href="{{ route('fichas.panel.detalles', $tarjeta->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ver detalles">{{ $tarjeta->titulo }}</a>
		          		</td>
		          		<td>{{ $tarjeta->descripcion }}</td>
		          		<td>
		          			<a href="{{ route('ficha.panel.edit', $tarjeta->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar tarjeta">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{ route('ficha.panel.destroy', $tarjeta->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar tarjeta">
		          				<i class="material-icons">delete</i>
		          			</a>
		          		</td>
		        	</tr>
    			@endforeach
        		</tbody>
      		</table>      		
		</div>
	</div>
	<div class="row">
		<div class="col s12 center-align">
			{{ $tarjetas->render() }}
		</div>
	</div>	
@endsection