@extends('plantillas.main')
@section('title', 'Panel del administrador')

@section('menu')
  @include('plantillas.partes.menu')
@endsection


@section('contenido')

     <!-- /Este row probablemente se quite de aqui -->
	<div class="row col s3">
        <a class="waves-effect waves-light btn btn-custom blue-grey darken-4 z-depth-5 left" 
        	href="{{ route('admin.paneladmin.create')}}">
        	Crear Administrador
        </a>        
    </div>
    <br>
    <div class="row">
    	<div class="col s12">
    		<h4>Administradores del Sistema</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="name">Nombre</th>
		              <th data-field="user">Usuario</th>
		              <th data-field="status">Status</th>
		              <th data-field="email">E-mail</th>
		              <th data-field="mensaje">Mensaje</th>
		              <th data-field="editar">Editar</th>
		              <th data-field="eliminar">Eliminar</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($admins as $admin)
		        	<tr>
		          		<td>{{ $admin->name }}</td>
		          		<td>{{ $admin->user }}</td>
		          		<td>Activo</td>
		          		<td>{{ $admin->email}}</td>
                  
                   
		          		<td><a href="#modal-msj" class="btn tooltipped modal-trigger  grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Enviar mensaje"><i class="material-icons">message</i></a></td>
		          		<td>
		          			<a href="{{ route('admin.paneladmin.edit', $admin->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar Admin">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			{!!Form::open(['route'=>['admin.paneladmin.destroy', $admin->id], 'method'=>'DELETE'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn red'])!!}
                            {!!Form::close()!!}
		          			<!--<a href="{{ route('admin.panel.destroy', $admin->id) }}" onclick="return confirm('Seguro desea eliminar esta admin?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar Administrador">
		          				<i class="material-icons">delete</i>
		          			</a>-->
		          		</td>
		        	</tr>
    			@endforeach
        		</tbody>
      		</table>   			
    	</div>
    </div>
    <div class="row">
    	<div class="col s12 center">
    		{{ $admins->render() }}
    	</div>
    </div>
    <!--star modal messages-->
        <div id="modal-msj" class="modal">
          <div class="modal-content">
            <h4>Enviar mensaje</h4>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="text" class="validate" placeholder="Felipe Guzman" disabled selected >
                    <label for="icon_email">A: </label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mood</i>
                    <input id="icon_msj" type="text" class="validate">
                    <label for="icon_msj">Asunto</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">inbox</i>
                    <textarea id="mensaje" class="materialize-textarea"></textarea>
                    <label for="mensaje">Mensaje</label>
                  </div>
                </div>
                 <div class="row">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Subir archivo</span>
                      <input type="file">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-fixed-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
          </div>
      </div><!--end modal mensaje admin-->
@endsection