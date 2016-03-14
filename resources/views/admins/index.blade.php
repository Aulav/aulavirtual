@extends('plantillas.main')
@section('title', 'Panel del administrador') 

@section('contenido')
	<!-- Este row probablemente se quite de aqui -->
	<div class="row">
        <div class="col s12">
            @if (Session::has('message'))
                <p class="flow-text center">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    <!-- /Este row probablemente se quite de aqui -->
	<div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
        	href="{{ route('institucion.panel.create')}}">
        		Crear Institución
        </a>        
    </div>
    <br>
    <div class="row">
    	<div class="col s12">
    		<h4>Mis Instituciones</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Institución</th>
		              <th data-field="direccion">Dirección</th>
		              <th data-field="telefono">Teléfono</th>
		              <th data-field="clave">Clave</th>
		              <th data-field="editar">Editar</th>
		              <th data-field="eliminar">Eliminar</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($instituciones as $institucion)
		        	<tr>
		          		<td>{{ $institucion->name }}</td>
		          		<td>{{ $institucion->direccion }}</td>
		          		<td>{{ $institucion->tel }}</td>
		          		<td>{{ $institucion->clave }}</td>
		          		<td>
		          			<a href="{{ route('institucion.panel.edit', $institucion->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar institución">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{ route('institucion.panel.destroy', $institucion->id) }}" onclick="return confirm('Seguro desea eliminar esta institucion?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar institución">
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
    		{{ $instituciones->render() }}
    	</div>
    </div>
@endsection