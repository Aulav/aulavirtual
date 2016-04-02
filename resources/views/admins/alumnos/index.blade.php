@extends('plantillas.main')

@section('title', 'Alumnos')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
  	<div class="col s6 m6 l4">
        <p class="flow-text">
        <select id="periodo" class="">
            <option value="" disabled selected>Elija un periodo</option>
            <option value="1" data-icon="{{asset('images/periodo.png') }}" class="circle">2016</option>
            <option value="2" data-icon="{{ asset('images/periodo.png') }}" class="circle">2016-2017</option>
        </select>
        </p>
    </div>
	<div class="col s6 m6 l4">
	<p class="flow-text center-align">
			<a class="waves-effect waves-light btn btn-custom blue-grey darken-4" 
	        	href="{{ route('alumno.panel.create')}}">
	        	 <i class="material-icons right">add</i>Crear Alumno
	        </a> 
	  </p>       
	</div>
	<div class="col s6 m6 l4">
	<p class="flow-text center-align">
        <a href="{{ route('alumnos.createExcel')}}" class="waves-effect waves-light btn btn-custom blue-grey darken-4">
        <i class="material-icons right">add</i>Subir Archivo CSV 
       </a>
     </p>  
		
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
		              <th></th>
		              <th></th>
		              <th data-field="settings">Confi</th>
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
		          		{!! Form::open(['route'=>['alumno.panel.destroy', $alumno->id], 'method'=>'DELETE'])!!}

		          		{!! Form::submit('Eliminar',['class'=>'btn red' ])!!}
		          		{!! Form::close() !!}
		          			
		          		</td>
		          		<td><a href="#configuracion" class="modal-trigger"><i class="tiny material-icons ">settings</i></a></td>
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
    <!-- Modal para las configuraciones de los alumnos -->
    <div id="configuracion" class="modal">
        <div class="modal-content">
            <p class="flow-text">Elija una opción:</p>
                <p class="flow-text"><a href="#!"><i class="material-icons right">info</i>Detalles del alumno</a></p>
                <p class="flow-text"><a href="#mensaje" class="modal-trigger"><i class="material-icons right">mail_outline</i>Enviar mensaje</a></p>
                <p class="flow-text"><a href="#"><i class="material-icons right">star</i>Avances</a></p>
        </div>
        <div class="modal-footer">
            <a href="javascript:void(0)" class="modal-action modal-close btn-flat">Cancelar</a>
        </div>
      	</div>
@endsection