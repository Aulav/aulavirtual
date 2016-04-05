@extends('plantillas.main')
@section('title', 'Cambiar foto de Perlfil')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
	<div class="center align">
         <h3>Configuracion de la Cuenta</h3>
         {!! Form::open(['route' =>'admin.updateprofile','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="row">
                <div class="input-field col s12" >
              
                  <img src="{{ asset('/images/user.png') }}" class="responsive-img profile-chico left">                   
                </div>
                 <div class="row">
                    <div class="col s12 m12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Archivo</span>
                                {!! Form::file('avatar')!!}
                            </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" value="Ningún archivo seleccionado" type="text">
                        </div>
                        </div>
                    </div>
                </div>
              </div>
             <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_box</i>
                  {!! Form::label('name','Nombre', ['for' => 'icon-prefix']) !!}
                  {!! Form::text('name',null,['class' => 'validate']) !!}
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  {!! Form::label('user','Nombre de Usuario', ['for' => 'icon-prefix'])!!}
                  {!! Form::text('user',null,['class' => 'validate']) !!}
                  
                </div>
              </div>
              <h5 class="left">Nueva Contraseña</h5>
              <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                {!! Form::label('password', 'Contraseña', ['for' => 'icon-prefix']) !!}
                {!! Form::password('password',null,['class' => 'validate']) !!}
         
              </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                {!! Form::label('password', 'Confirmar Contraseña', ['for' => 'icon-prefix']) !!}
                {!! Form::password('password',null,['class' => 'validate']) !!}
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="enviar">Guardar
                <i class="material-icons left">send</i>
              </button>
            {!! Form::close() !!}
        </div>
@endsection