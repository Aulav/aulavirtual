@extends('plantillas.main')

@section('title', 'Grupos') 

@section('contenido')
  	<div class="col s12 m12 l4">
        <p class="flow-text">
        <select id="periodo" class="">
            <option value="" disabled selected>Elija un periodo</option>
            <option value="1" data-icon="{{asset('images/periodo.png') }}" class="circle">2016</option>
            <option value="2" data-icon="{{ asset('images/periodo.png') }}" class="circle">2016-2017</option>
        </select>
        </p>
    </div>
	<div class="row center">
			<a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
	        	href="{{ route('alumno.panel.create')}}">
	        		Crear Nuevo Alumno
	        </a>   
	</div>
	 <div class="row">
    	<div class="col s12">
    		<h4>Listado de Alumnos</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Matricula</th>
		              <th data-field="direccion">Nombre</th>
		              <th data-field="telefono">Status</th>
		              <th data-field="clave">No. de Materias</th>
		              <th data-field="editar">Faltas</th>
		              <th data-field="eliminar">Promedio</th>
		              <th data-field="settings">Configuraciones</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($alumnos as $alumno)
		        	<tr>
		          		<td>{{ $alumno->matricula }}</td>
		          		<td>{{ $alumno->name }}</td>
		          		<td>{{ $alumno->user }}</td>
		          		<td>5</td>
		          		<td>5</td>
		          		<td>6</td>
		          		<td>
		          			<a href="{{ route('alumno.panel.edit', $alumno->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar alumno">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          		{!! Form::open(['route'=>['alumno.panel.destroy', $alumno->id], 'method' => 'DELETE'])!!}
		          		{!! Form::submit('ELiminar', ['class'=>'btn'])!!}
		          		{!! Form::close() !!}
		          			<a href="{{ route('alumno.panel.destroy', $alumno->id) }}"  class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar alumno">
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
    		{{ $alumnos->render() }}
    	</div>
    </div>
@endsection