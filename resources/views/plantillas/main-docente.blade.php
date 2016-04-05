<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Plataforma Educativa')</title>
	<!--estilos principales de la plataforma Educativa-->
	<link rel="stylesheet"  href="{{ asset('css/estilos.css')}}">
	<!--import materialize.css-->
  	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
  	<!--import Google Icon Fonts-->
  	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  	<link rel="stylesheet" type="text/css" href="{{ asset('fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fullcalendar/fullcalendar.print.css')}}" media="print">
    <link rel="stylesheet" type="text/css" href="{{ asset('fullcalendar/lib/cupertino/jquery-ui.min.css')}}">
  	<!--import ajax for preloader-->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<!--preoloader para la pagina principal-->
	  <div id="preloader">
	   <div class="progress">
	      <div class="indeterminate"></div>
	    </div>
	  </div>
	@include('plantillas.partes.nav-docente')

	<div class="row">
        <div class="col s12">
            @if (Session::has('message'))
                <p class="content card-panel  red lighten-1 z-depth-5 center flow-text center">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>

	<!-- contenido de toda la pagina -->
	<div class="row">
      	<div class="col s12 m3"> <!--Div para el panel o menu de navegacion -->
	        <!--This content will be:
	          1-Menu Administrador o Academico
	          2-Menu Profesor que este caso seria practicamente lo mismo
	          3-Menu alumnos-->
	        @include('plantillas.partes.menu-docente')
 			@include('plantillas.partes.errors')
 		
    	</div><!--End Contenido de toda la pagina-->
    	<div class="col s12 m9">
    		@include('plantillas.partes.errors')
       	 	@yield('contenido')
    	</div>
  	</div><!--end Todo el contenido-->  
	@include('plantillas.partes.footer') 
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('fullcalendar/lib/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('fullcalendar/fullcalendar.js')}}"></script>
  <script type="text/javascript" src="{{asset('fullcalendar/lang-all.js')}}"></script>
  <script type="text/javascript" src="{{asset('fullcalendar/even.js')}}"></script>
<script>

  $(document).ready(function() {
  var currentLangCode = 'es';//cambiar el idioma al español
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      lang:currentLangCode,
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: {
        url: '{{asset('fullcalendar/demos/php/get-events.php')}}',
        error: function() {
          $('#script-warning').show();
        }
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
    
  });

</script>
</body>
</html>