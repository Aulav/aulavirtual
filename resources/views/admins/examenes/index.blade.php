@extends('plantillas.main')

@section('title', 'Examenes')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')

<div class="row">
		<div class="col s12">
			<nav>
				<div class="nav-wrapper teal darken-1">
					<div class="col s12">
						<a href="{{ asset('/examen/panel') }}" class="breadcrumb">Atras</a>
						<span class="breadcrumb">Crear Nuevo Examen</span>
					</div>
				</div>
			</nav>
		</div>
		
	</div>

	<div class="row">
		<div class="col s12">
			<h1 class="center flow-text">Agregar Nuevo Examen</h1>
			{!! Form::open(['route' =>'examen.panel.store','method' => 'POST', 'file' => true]) !!}
			<div class="row">	       
	        	<div class="input-field col s10 m5">	        	
				{!! Form::select('materia_id', $materias, null,['placeholder' =>'Selecciona una Materia','required']) !!}
	        	</div>
	        </div> 

			<div class="row">	       
	        	<div class="input-field col s10 m5">	        	
				{!! Form::select('docente_id', $docentes, null,['placeholder' =>'Selecciona un Docente','required']) !!}
	        	</div>
	        </div> 

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">book</i>
					{!! Form::label('name', 'Nombre del Examen', ['for' => 'icon-prefix']) !!}
					{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aqui el nombre', 'id' => 'icon-prefix'])!!}
				</div>
			</div>
			
			<div class="row">          
                    <div class="input-field col s10 m6">                
                    {!! Form::select('duracion',['30 min', '45 min','60 min'], null,['placeholder' =>'Selecciona Tiempo de la Evaluación','required']) !!}
                    </div>    
            </div>

			<div class="row">          
                    <div class="input-field col s10 m6">                
                    {!! Form::date('fecha_aplicacion', \Carbon\Carbon::now(),['placeholder' =>'Selecciona Fecha de la Evaluación','required']) !!}
                    </div>    
            </div>
           
                 
            <div class="row">
		    	<div class="col s12">
		      		{!! Form::submit('Crear Examen', ['class' => 'btn']) !!}
		    	</div>  
      		</div>
      	
			{!! Form::close() !!}
		</div>
	</div>



*************         ********************************************************        ****************
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
		          		<td><a href="{{ asset('/pregunta/panel') }}">{{ $examen->name }}</a></td>
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
    <div class="row">
    	<div class="col s12 center">
    		{{ $examenes->render() }}
    	</div>
    </div>
@endsection