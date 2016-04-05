@extends('plantillas.main')
@section('title','Examen')
@section('menu')
  @include('plantillas.partes.menu')
@endsection
@section('contenido')
<div class="row">
    	<div class="col s12">
      <p><strong>1.¿De estas 4 palabras, ¿Cuál es la intrusa?</strong></p>    
        <p class="blue-text text-darken-2">A   Canberra</p>
        <p>B   New York</p>
        <p>C   Viena</p>
        <p>D   Madrid</p>
        <p><strong>2.¿De estas 4 palabras, ¿Cuál es la intrusa?</strong></p>    
        <p >A   Canberra</p>
        <p>B   New York</p>
        <p class="blue-text text-darken-2">C   Viena</p>
        <p>D   Madrid</p>
      </div>
    </div>
@endsection