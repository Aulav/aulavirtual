@extends('plantillas.login')
@section('title', 'Login del administrador')
@section('contenido')
    <div class="card-login form z-depeth-4">
     <!-- <h4 class="center-align">Login</h4>-->
      <div class="foto-login"><img src="../images/school.svg"/></div>
        {!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}
   
             <div class="input-field col s12 m6">
                <i class="material-icons prefix">person</i>
                {!! Form::label('email', 'correo Electronico') !!}
                {!! Form::email('email', null, ['class' => '', 'placeholder' => 'example@example.com']) !!}
              </div>
       
                 <div class="input-field col s12 m6">
                <i class="material-icons prefix">vpn_key</i>
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******************']) !!}
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