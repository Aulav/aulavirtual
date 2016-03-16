@extends('plantillas.main')
@section('title', 'Panel del administrador') 

@section('contenido')

    <!-- /Este row probablemente se quite de aqui -->
	<div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
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
		              <th data-field="ap_paterno">Ap. Paterno</th>
		              <th data-field="ap_materno">Ap. Materno</th>
		              <th data-field="user">Usuario</th>
		              <th data-field="password">Password</th>
		              <th data-field="email">E-mail</th>
		              <th data-field="editar">Editar</th>
		              <th data-field="eliminar">Eliminar</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($admins as $admin)
		        	<tr>
		          		<td>{{ $admin->name }}</td>
		          		<td>{{ $admin->ap_paterno }}</td>
		          		<td>{{ $admin->ap_materno }}</td>
		          		<td>{{ $admin->user }}</td>
		          		<td>{{ $admin->password }}</td>
		          		<td>{{ $admin->email }}<td>
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
@endsection