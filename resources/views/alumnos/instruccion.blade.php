@extends('plantillas.main-alumno2')
@section('title', 'Foro')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')


    
    <div class="row"><!--inicia todo el contenido de la pagina-->
  
      <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->
       
        <!--end paginacion de usuario-->
        <div class="panel panel-primary">
        <div class="panel-heading"><h5>Instituciones</h5></div></div>
        
        <div class="col s12">
          <p>
            
<p class="red-text text-darken-4 center">No inicie el examen sin antes leer las instrucciones</p>
          </p>
          <p>
          1. Registre con lápiz del número 2 ½ su nombre completo y su número de folio en el cuadernillo de preguntas y en la hoja de respuestas.</p>
<p>2. En la hoja de respuestas anote el número del examen que usted contestará. Este dato aparece en la carátula del cuadernillo de preguntas.</p>
<p>3. Firme su hoja de respuestas, en la parte de atrás, con lápiz.</p>
<p>4. Al inicio del cuadernillo de la primera sesión encontrará una carta de confidencialidad, llene los datos que se le solicitan. Al inicio del cuadernillo de la segunda sesión encontrará una encuesta de opinión que deberá contestar en el espacio destinado a la encuesta en la hoja de respuestas.</p>
<p>5. Una vez iniciado el examen lea con cuidado todas las instrucciones contenidas tanto en el cuadernillo de preguntas, como en la hoja de respuestas.</p>
<p>6. Lea detenidamente cada pregunta antes de marcar su respuesta. En cada reactivo hay cuatro opciones identificadas con las letras A), B), C) y D), pero sólo una de ellas es la correcta.</p>
<p>7. Su examen se calificará por computadora, por ello es indispensable considerar lo siguiente:




<p>• Marque una sola opción de respuesta. Si marca más de una, la pregunta se considerará como no contestada.</p>


<p>8. Aproveche y distribuya su tiempo:</p>
<p>• Es importante tratar de contestar todos los reactivos, sin embargo, no se detenga demasiado en preguntas que considere particularmente difíciles, márquelas en este cuadernillo; si tiene tiempo revíselas nuevamente y seleccione sus respuestas.</p>
<p>• Si otros acaban rápido o antes que usted, no se presione; si le sobra tiempo revise y lea para verificar sus respuestas.</p>
<p>9. Recuerde que no es un examen a libro abierto. Sólo puede utilizar calculadora.</p>
<p>10. Si necesita hacer cálculos o apuntes utilice los espacios en blanco de este cuadernillo de preguntas. No está permitido usar hojas, tarjetas, cuadernos, etc.<p>
<p>11. No está permitido, ni es ético, intentar copiar las respuestas de otro sustentante o los reactivos del examen, estas conductas serán sancionadas.</p>
      <a href="{{asset('/alumno/presen_examen')}}" class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons">save</i>Empezar</a>
        </div>
      
    </div><!--End contenido de la pagina-->
  </div><!--end div principal-->


@endsection