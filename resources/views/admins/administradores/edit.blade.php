@extends('plantillas.main')
@section('title', 'Editar Administrador' . $admin->name)

@section('menu')
  @include('plantillas.partes.menu')
@endsection


@section('contenido')
        <div class="row">
          <div class="col s12">
            <nav>
              <div class="nav-wrapper teal darken-1">
                <div class="col s12">
                  <a href="{{ asset('/admin/paneladmin') }}" class="breadcrumb">Atras</a>
                    <span class="breadcrumb">Editar Administrador</span>
                </div>
              </div>
            </nav>
          </div>
        </div>
<div class="row">
    <h1 class="center flow-text">Editar Administrador {{ $admin->name }}</h1>
    {!! Form::open(['route' => ['admin.paneladmin.update', $admin], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
       <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">school</i>
            {!! Form::label('name', 'Nombre del admin', ['for' => 'icon-prefix']) !!}
            {!! Form::text('name', $admin->name, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">school</i>
              {!! Form::label('ap_paterno', 'Apellido Paterno:', ['for' => 'icon-prefix']) !!}
              {!! Form::text('ap_paterno', $admin->ap_paterno, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Paterno', 'id' => 'icon-prefix']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">school</i>
            {!! Form::label('ap_materno', 'Apellido Materno', ['for' => 'icon-prefix']) !!}
            {!! Form::text('ap_materno', $admin->ap_materno, ['class' => 'validate', 'placeholder' => 'Escribe aquí Apellido Materno', 'id' => 'icon-prefix']) !!}
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">school</i>
            {!! Form::label('user', 'Usuario', ['for' => 'icon-prefix']) !!}
            {!! Form::text('user', $admin->user, ['class' => 'validate', 'placeholder' => 'Escribe aquí nombre de Usuario', 'id' => 'icon-prefix']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
              <i class="material-icons prefix">vpn_key</i>
              {!! Form::label('direccion', 'Dirección', ['for' => 'icon-prefix']) !!}
              {!! Form::text('direccion', $admin->direccion, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
          </div>
          <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              {!! Form::label('tel', 'Telefono', ['for' => 'icon-prefix']) !!}
              {!! Form::text('tel', $admin->tel, ['class' => 'validate', 'placeholder' => 'Escribe aquí la telefono', 'id' => 'icon-prefix']) !!}
          </div>      
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            {!! Form::label('email', 'Correo', ['for' => 'icon-prefix']) !!}
            {!! Form::text('email', $admin->email, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s16 m3">                
            {!! Form::select('sexo',['Femenino', 'Masculino'], $admin->sexo,['placeholder' =>'Selecciona su sexo','required']) !!}
          </div>
          <div class="input-field col s3">
            {!!Form::label('Edad','Edad',['for'=> 'icon-prefix'])!!}
            {!! Form::number('edad', $admin->edad);!!}
          </div>
        </div>
            
        
        <div class="row">
          <div class="col s12">
            {!! Form::submit('Editar Administrador', ['class' => 'btn']) !!}
          </div>  
          {!! Form::close(); !!}
        </div>
      </div>
      

@endsection