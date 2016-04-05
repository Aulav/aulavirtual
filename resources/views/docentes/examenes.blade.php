@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<div class="row">
    	<div class="col s12">
    		<h4>Listado de Examenes</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="nombre">Nombre</th>
		              <th data-field="duracion">Duración</th>
		              <th data-field="materia">Materia</th>
		              <th data-field="docente">Docente</th>
		        </thead>
		        <tbody>
		        @foreach ($examenes as $examen)
		        	<tr>	
		          		<td><a href="{{ asset('/docente/verexamenes') }}">{{ $examen->name }}</a></td>
		          		<td>{{ $examen->duracion }}</td>
		          		<td>{{ $examen->materia_id}}</td>
		          		<td>{{ $examen->docente_id}}</td>
		          		<td>
		          			<a href="{{ route('examen.panel.edit', $examen->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar examen">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          		{!! Form::open(['route'=>['examen.panel.destroy', $examen->id], 'method' => 'DELETE'])!!}
		          		{!! Form::submit('Eliminar', ['class'=>'btn'])!!}
		          		{!! Form::close() !!}
		          			<a href="{{ route('examen.panel.destroy', $examen->id) }}"  class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar examen">
		          			</a>
		          		</td>
		        	</tr>
    			@endforeach
        		</tbody>
      		</table>   			
    	</div>
    </div>
@endsection