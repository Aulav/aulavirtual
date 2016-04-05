@extends('plantillas.main-docente')
@section('title','Alumnos')

@section('menu')
@include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<div class="row">
    	<div class="col s12">
    		<h4>Listado de Alumnos</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Matricula</th>
		              <th data-field="direccion">Nombre</th>
		              <th data-field="telefono">Status</th>
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
		          		<td>Activo</td>
		          		<td>8.5</td>
		          		<td></td>
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
    <!-- Modal para las configuraciones de los alumnos -->
                <div id="configuracion" class="modal">
                    <div class="modal-content">
                        <p class="flow-text">Elija una opción:</p>
                        <p class="flow-text"><a href="{{route('alumno.editar', $alumno->id) }}"><i class="material-icons right">info</i>Detalles del alumno</a></p>
                        <p class="flow-text"><a href="#mensaje" class="modal-trigger"><i class="material-icons right">mail_outline</i>Enviar mensaje</a></p>
                        <p class="flow-text"><a href="#"><i class="material-icons right">star</i>Avances</a></p>
                        <p class="flow-text"><a href="#eliminar" class="modal-trigger"><i class="material-icons right">delete</i>Eliminar</a></p>
                    </div>
                    <div class="modal-footer">
                            <a href="javascript:void(0)" class="modal-action modal-close btn-flat">Cancelar</a>
                        </div>
                </div>
<!-- Modal para el envio de mensaje -->
                <div id="mensaje" class="modal">
                    <form action="#" method="post">
                        <div class="modal-content">
                          <p class="flow-text">Escriba su mensaje a continuación:</p>
                           <div class="input-field">
                                <label for="destinatario">Para: </label>
                                <input type="text" name="destinatario" />
                            </div>
                            <div class="input-field">
                                <label for="asunto">Asunto: </label>
                                <input type="text" name="asunto" />
                            </div>
                            <div class="input-field">
                                <label for="mensaje">Mensaje: </label>
                                <textarea class="materialize-textarea" name="mensaje"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn-flat" value="Enviar" />
                            <a href="javascript:void(0)" class="modal-action modal-close btn-flat">Cancelar</a>
                        </div>
                    </form>
                </div>
@endsection