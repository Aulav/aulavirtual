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
  	<!--import ajax for preloader-->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<!--alerts desvanece en 3 segundos-->
  <script type="text/javascript">
    $(document).ready(function() {
      setTimeout(function() {
          $(".content").fadeOut(1500);
      },3000);
    });
  </script>
</head>
<body>
	<!--preoloader para la pagina principal-->
	  <div id="preloader">
	   <div class="progress">
	      <div class="indeterminate"></div>
	    </div>
	  </div>
	@include('plantillas.partes.nav')

	<div class="row">
        <div class="col s12">
            @if (Session::has('message'))
                <p class="content card-panel cyan z-depth-5 center flow-text center ">{{ Session::get('message') }}</p>
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
	        @include('plantillas.partes.menu')
 			
 		
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
</body>
</html>