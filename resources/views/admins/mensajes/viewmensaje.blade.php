@extends('plantillas.main')
@section('title', 'Crear nueva institución')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
<div class="row">
<h3 class="center">Buzón de Entrada</h3>
<div class="col s12">
  <p><strong>Asunto: </strong></p>
  <p>Hola profesor, cual es el horario de la clase en vivo?</p><br>

<p>Responder</p>
  <form>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
        <div class="input-field col s12">
        <a href="{{ route('admin.mensajes') }}" onclick="return confirm('Mensaje Enviado Correctamente')" class="waves-effect waves-light btn">Responder</a>
        </div>
      </div>
  </form>
</div>
</div>
@endsection