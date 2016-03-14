@extends('plantillas.main')
@section('title', 'Grupos') 

@section('contenido')	
	<div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
        	href="{{ route('grupo.panel.create')}}">
        		Crear Grupo
        </a>        
    </div>
    <br>
    <div class="row">
    	<div class="col s12">
    		<h4>Mis Grupos</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Institución</th>
		              <th data-field="direccion">Dirección</th>
		              <th data-field="telefono">Teléfono</th>
		              <th data-field="editar">Editar</th>
		              <th data-field="eliminar">Eliminar</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($grupos as $grupo)
		        	<tr>
		          		<td>{{ $grupo->name }}</td>
		          		<td>{{ $grupo->grado }}</td>
		          		<td>{{ $grupo->numero_alumnos }}</td>
		          		<td>
		          			<a href="{{ route('grupo.panel.edit', $grupo->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar grupo">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{ route('grupo.panel.destroy', $grupo->id) }}" onclick="return confirm('Seguro desea eliminar esta institucion?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar grupo">
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
    	<div class="col s12 center">
    		{{ $grupos->render() }}
    	</div>
    </div>
@endsection