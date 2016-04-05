@extends('plantillas.main-alumno2')
@section('title', 'Examen')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')
  

    <div class="row"><!--inicia todo el contenido de la pagina-->
   
      <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->
     
        <div class="row">
          <div class="clock" style="margin:2em;"></div>
          <div class="message"></div>
        </div>
        <script type="text/javascript">
    var clock;
    
    $(document).ready(function() {
      var clock;

      clock = $('.clock').FlipClock({
            clockFace: 'DailyCounter',
            autoStart: false,
            callbacks: {
              stop: function() {
                $('.message').html('<div class="red-text text-darken-4">Lo sentimos se termino tu tiempo, se han han deshabilitado todas opciones</div>')
              }
            }
        });
            
        clock.setTime(600);
        clock.setCountdown(true);
        clock.start();

    });
  </script>
  
      <div class="col s12">
      <p><strong>1.¿De estas 4 palabras, ¿Cuál es la intrusa?</strong></p>    
         <p>
          <input name="group1" type="radio" id="test1" />
          <label for="test1">A New York</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test2" />
          <label for="test2">B Viena</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test3" />
          <label for="test3">C Madrid</label>
         </p>
        <p><strong>2.¿De estas 4 palabras, ¿Cuál es la intrusa?</strong></p>    
         <p>
          <input name="group1" type="radio" id="test4" />
          <label for="test4">A New York</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test5" />
          <label for="test5">B Viena</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test6" />
          <label for="test6">C Madrid</label>
         </p>
         <p><strong>3.¿De estas 4 palabras, ¿Cuál es la intrusa?</strong></p>    
         <p>
          <input name="group1" type="radio" id="test7" />
          <label for="test7">A New York</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test7" />
          <label for="test7">B Viena</label>
         </p>
         <p>
          <input name="group1" type="radio" id="test8" />
          <label for="test8">C Madrid</label>
         </p>
         <a href="{{asset('/alumnos/index-dinamico')}}" class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons">save</i>Guardar</a>
      </div>
      
    </div><!--End contenido de la pagina-->
  </div><!--end div principal-->

  

  
  <!--import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/funciones.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>


@endsection