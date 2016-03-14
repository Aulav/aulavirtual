@extends('plantillas.login')
@section('title', 'Login del administrador')
@section('contenido')
    <div class="row">
      <h2 class="center-align">Login</h2>
        {!! Form::open(['route' => 'admin.acceso', 'method' => 'POST']) !!}
            <div class="row">
              <div class="input-field col s12">
                {!! Form::label('email', 'correo Electronico') !!}
                {!! Form::email('email', null, ['class' => '', 'placeholder' => 'example@example.com']) !!}
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******************']) !!}
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                  <p>
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </p>
              </div>
            </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col m12">
                <p class="right-align">                  
                {!! Form::submit('Acceder', ['class' => 'btn btn-large waves-effect waves-light']) !!}
                </p>
              </div>
            </div>
            {!! Form::close() !!}            
    </div>
@stop