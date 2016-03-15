@extends('plantillas.main')

@section('title', 'alumno')

@section('contenido')
	<div class="row">
		<div class="col s12">
			<nav>
				<div class="nav-wrapper teal darken-1">
					<div class="col s12">
						<a href="{{ asset('/alumno/panel') }}" class="breadcrumb">Atras</a>
						<span class="breadcrumb">Crear Nuevo Alumno</span>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h1 class="center flow-text">Agregar Nuevo Alumno</h1>
			{!! Form::open(['route' =>'alumno.panel.store','method' => 'POST', 'file' => true]) !!}
			 <div class="row">	       
	        	<div class="input-field col s12 m6">	        	
				{!! Form::select('institucion_id', $instituciones, null,['placeholder' =>'Selecciona una Institucion','required']) !!}			
	        	</div>
	        </div> 
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">confirmation_number</i>
					{!! Form::label('matricula', 'Matricula', ['for' => 'icon-prefix'])
					!!}
					{!! Form::text('matricula', null, ['class' => 'validate', 'placeholder' => 'Introduce la matricula del Alumno', 'id' => 'icon-prefix'])!!}
				</div>
				<div class="input-field col s6">
					<i class="material-icons">person</i>
					{!! Form::label('name', 'Nombre del Alumno', ['for' => 'icon-prefix']) !!}
					{!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aqui el nombre', 'id' => 'icon-prefix'])!!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">account_circle</i>
					{!! Form::label('user', 'Nombre de Usuario', ['for' => 'icon-prefix'])!!}
					{!! Form::text('user',null,['class' => 'validate', 'placeholder' => 'Nombre de Usuario','id' => 'icon-prefix'])!!}
				</div>
				<div class="input-field col s6">
					<i class="material-icons">vpn_key</i>
					{!! Form::label('passwor', 'Contraseña', ['for' => 'icon-prefix']) !!}
					{!! Form::password('password',null,['class' => 'validate', 'placeholder' => 'Contraseña', 'id' => 'icon-prefix'])!!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">account_circle</i>
					{!! Form::label('ap_paterno', 'Apellido Paterno', ['for' => 'icon-prefix'])!!}
					{!! Form::text('ap_paterno',null,['class' => 'validate', 'placeholder' => 'Apellido Paterno','id' => 'icon-prefix'])!!}
				</div>
				<div class="input-field col s6">
					<i class="material-icons">account_circle</i>
					{!! Form::label('ap_materno', 'Apellido Materno', ['for' => 'icon-prefix'])!!}
					{!! Form::text('ap_materno',null,['class' => 'validate', 'placeholder' => 'Apellido Materno','id' => 'icon-prefix'])!!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">account_circle</i>
					{!! Form::label('direccion', 'Escribe la Direccion', ['for' => 'icon-prefix'])!!}
					{!! Form::text('direccion',null,['class' => 'validate', 'placeholder' => 'Escribe la Direccion','id' => 'icon-prefix'])!!}
				</div>
				<div class="input-field col s6">
					<i class="material-icons">account_circle</i>
					{!! Form::label('tel', 'Escribe el Telefono', ['for' => 'icon-prefix'])!!}
					{!! Form::text('tel',null,['class' => 'validate', 'placeholder' => 'Escribe el Telefono','id' => 'icon-prefix'])!!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons">email</i>
					{!! Form::label('email', 'Escribe el Email', ['for' => 'icon-prefix'])!!}
					{!! Form::email('email',null,['class' => 'validate', 'placeholder' => 'Escribe el Correo Electronico','id' => 'icon-prefix'])!!}
				</div>
			</div>
			<div class="row">          
                    <div class="input-field col s16 m6">                
                    {!! Form::select('sexo',['Femenino', 'Masculino'], null,['placeholder' =>'Selecciona su sexo','required']) !!}
                    </div>
                    <div class="input-field col s6">
                    	{!! Form::number('edad', 'value');!!}
                    </div>
            </div>
             <div class="row">	       
	        	<div class="input-field col s12 m6">	        	
				{!! Form::select('rol_id', $roles, null,['placeholder' =>'Selecciona un tipo de Usuario','required']) !!}			
	        	</div>
	        </div>    
            <p>Si desea puede subir aquí un listado de archivo en formato CSV (Excel) Impirma la plantilla <a href="plantilla.blade.php">Aquí</a></p>
            <div class="row">
                <div class="col s12 m12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Archivo</span>
                            <input type="file" name="listado">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" value="Ningún archivo seleccionado" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
		    	<div class="col s12">
		      		{!! Form::submit('Crear alumno', ['class' => 'btn']) !!}
		    	</div>  
      		</div>
      	
			{!! Form::close() !!}
		</div>
	</div>

@endsection