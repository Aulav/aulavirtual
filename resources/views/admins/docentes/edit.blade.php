@extends('plantillas.main')
@section('title', 'Editar docente' . $docente->name)

@section('contenido')
	<div class="row">
  <h1 class="center flow-text">Editar Docente {{ $docente->name }}</h1>
    {!! Form::open(['route' => ['docente.panel.update', $docente], 'method' => 'PUT']) !!}
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          {!! Form::label('name', 'Nombre del docente', ['for' => 'icon-prefix']) !!}
          {!! Form::text('name', $docente->name, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          {!! Form::label('ap_paterno', 'Apellido Paterno:', ['for' => 'icon-prefix']) !!}
          {!! Form::text('ap_paterno', $docente->ap_paterno, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Paterno', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          {!! Form::label('ap_materno', 'Apellido Materno', ['for' => 'icon-prefix']) !!}
          {!! Form::text('ap_materno', $docente->ap_materno, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Materno', 'id' => 'icon-prefix']) !!}
        </div>

      <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          {!! Form::label('user', 'Usuario', ['for' => 'icon-prefix']) !!}
          {!! Form::text('user', $docente->user, ['class' => 'validate', 'placeholder' => 'Escribe aquí nombre de Usuario', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          {!! Form::label('password', 'Passwrod', ['for' => 'icon-prefix']) !!}
          {!! Form::text('password', $docente->password, ['class' => 'password', 'placeholder' => 'Escribe aquí su password', 'id' => 'icon-prefix']) !!}
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          {!! Form::label('direccion', 'Dirección', ['for' => 'icon-prefix']) !!}
          {!! Form::text('direccion', $docente->direccion, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          {!! Form::label('tel', 'Telefono', ['for' => 'icon-prefix']) !!}
          {!! Form::text('tel', $docente->tel, ['class' => 'validate', 'placeholder' => 'Escribe aquí la telefono', 'id' => 'icon-prefix']) !!}
        </div>      
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
            {!! Form::label('email', 'Correo', ['for' => 'icon-prefix']) !!}
          {!! Form::text('email', $docente->email, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">web</i>
            {!! Form::label('edad', 'Edad', ['for' => 'icon-prefix']) !!}
          {!! Form::text('edad', $docente->edad, ['class' => 'validate', 'placeholder' => 'Escribe aquí la página edad', 'id' => 'icon-prefix']) !!}
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
        <div class="file-field input-field">
          <div class="btn">
            <span>Avatar</span>
          {!! Form::file('avatar') !!}
          </div>
          <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Suba aquí foto del Docente">
            </div>
        </div>            
        </div>
      </div>
      <div class="row">
    	<div class="col s12">
      		{!! Form::submit('Editar Docente', ['class' => 'btn']) !!}
    	</div>  
    {!! Form::close(); !!}
  </div>
@endsection