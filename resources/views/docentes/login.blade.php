@extends('plantillas.login')
@section('title', 'Login del administrador')
@section('contenido')
    <div class="card-login form z-depeth-4">
     <!-- <h4 class="center-align">Login</h4>-->
      <div class="foto-login"><img src="../images/school.svg"/></div>
        {!! Form::open(['route' => 'docente.acceso', 'method' => 'POST']) !!}
           
             <div class="input-field col s12 m6">
                <i class="material-icons prefix">person</i>
                {!! Form::label('email', 'correo Electronico') !!}
                {!! Form::email('email', null, ['class' => '', 'placeholder' => 'example@example.com']) !!}
              </div>
       
                 <div class="input-field col s12 m6">
                <i class="material-icons prefix">vpn_key</i>
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'input-field', 'placeholder' => '*******************']) !!}
              </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col m12">
                <p class="right-align">                  
                {!! Form::submit('Acceder', ['class' => 'btn waves-effect indigo darken-2']) !!}
                </p>
              </div>
            </div>
            {!! Form::close() !!}            
    </div>
@stop