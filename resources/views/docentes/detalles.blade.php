@extends('plantillas.main-doncente')
@section('title', 'Editar el Alumno ' . $alumno->name)

@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection

@section('contenido')
	    <div class="row">
	        <div class="col s12">
	            <nav>
	                <div class="nav-wrapper teal darken-1">
	                  <div class="col s12">
	                    <a href="{{ asset('/alumno/panel') }}" class="breadcrumb">Atrás</a>
	                    <span class="breadcrumb">Editar Alumnos</span>
	                  </div>
	                </div>
	            </nav>
	        </div>
	    </div>
	<div class="row">
	<h1 class="center flow-text">Editar Alumno {{ $alumno->name }}</h1>
    {!! Form::open(['route' => ['alumno.panel.update', $alumno], 'method' => 'PUT', 'files' => true]) !!}
       <div class="row">
			<div class="input-field col s6">
				<i class="material-icons">confirmation_number</i>
				{!! Form::label('matricula', 'Matricula', ['for' => 'icon-prefix'])
					!!}
				{!! Form::text('matricula', $alumno->matricula, ['class' => 'validate', 'placeholder' => 'Introduce la matricula del Alumno', 'id' => 'icon-prefix'])!!}
			</div>
			<div class="input-field col s6">
				<i class="material-icons">person</i>
				{!! Form::label('name', 'Nombre del Alumno', ['for' => 'icon-prefix']) !!}
				{!! Form::text('name', $alumno->name, ['class' => 'validate', 'placeholder' => 'Escribe aqui el nombre', 'id' => 'icon-prefix'])!!}
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons">account_circle</i>
				{!! Form::label('ap_paterno', 'Apellido Paterno', ['for' => 'icon-prefix'])!!}
				{!! Form::text('ap_paterno',$alumno->ap_paterno,['class' => 'validate', 'placeholder' => 'Apellido Paterno','id' => 'icon-prefix'])!!}
			</div>
			<div class="input-field col s6">
				<i class="material-icons">account_circle</i>
				{!! Form::label('ap_materno', 'Apellido Materno', ['for' => 'icon-prefix'])!!}
				{!! Form::text('ap_materno',$alumno->ap_materno,['class' => 'validate', 'placeholder' => 'Apellido Materno','id' => 'icon-prefix'])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons">account_circle</i>
				{!! Form::label('direccion', 'Escribe la Direccion', ['for' => 'icon-prefix'])!!}
				{!! Form::text('direccion',$alumno->direccion,['class' => 'validate', 'placeholder' => 'Escribe la Direccion','id' => 'icon-prefix'])!!}
			</div>
			<div class="input-field col s6">
				<i class="material-icons">account_circle</i>
				{!! Form::label('tel', 'Escribe el Telefono', ['for' => 'icon-prefix'])!!}
				{!! Form::text('tel',$alumno->tel,['class' => 'validate', 'placeholder' => 'Escribe el Telefono','id' => 'icon-prefix'])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons">email</i>
				{!! Form::label('email', 'Escribe el Email', ['for' => 'icon-prefix'])!!}
				{!! Form::email('email',$alumno->email,['class' => 'validate', 'placeholder' => 'Escribe el Correo Electronico','id' => 'icon-prefix'])!!}
			</div>
		</div>
		<div class="row">          
            <div class="input-field col s16 m6">                
               {!! Form::select('sexo', ['Femenino','Masculino'],$alumno->sexo,['placeholder' =>'Selecciona su sexo','required']) !!}
            </div>
            <div class="input-field col s6">
               {!! Form::number('edad', $alumno->edad);!!}
            </div>
        </div>	
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Editar Alumno', ['class' => 'btn']) !!}
    	</div>  
      </div>
    {!! Form::close(); !!}
  </div>
@endsection