<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Default') | Plataforma Educativa</title>
	<!--estilos principales de la plataforma Educativa-->
	<link rel="stylesheet"  href="{{ asset('css/estilos.css')}}">
	<!--import materialize.css-->
  	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
  	<!--import Google Icon Fonts-->
  	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  	<!--import ajax for preloader-->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	 <!--inithial menu-->
     <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content ">
       <li><a href="profile_user.html"><i class="material-icons ">person</i>Perfil</a></li>
        <li class="divider"></li>
        <li><a href="#!"><i class="material-icons">input</i>Salir</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
       <li><a href="examen_alumno.html"> <i class="material-icons">assignment</i>Examenes</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="material-icons">speaker_notes</i>Ficha de estudio</a></li>
            <li class="divider"></li>
            <li><a href="#"> <i class="material-icons">chat</i>Foro</a></li>
      </ul>
      <ul id="dropdown1" class="dropdown-content">
       <li><a href="profile_user.html"><i class="material-icons">person</i>Perfil</a></li>
        <li class="divider"></li>
        <li><a href="#!"><i class="material-icons">input</i>Salir</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
       <li><a href="#"> <i class="material-icons">assignment</i>Examenes</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="material-icons">speaker_notes</i>Ficha de estudio</a></li>
            <li class="divider"></li>
            <li><a href="#"> <i class="material-icons">chat</i>Foro</a></li>
      </ul>

      <ul id="dropdown3" class="dropdown-content">
       <li><a href="#"> <i class="material-icons">spellcheck</i>Asistencia</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="material-icons">perm_media</i>Entregas</a></li>
            <li class="divider"></li>
            <li><a href="#"> <i class="material-icons">comment</i>Discusiones</a></li>
            <li class="divider"></li>
            <li><a href="#"> <i class="material-icons">assignment</i>Pruebas</a></li>
            <li class="divider"></li>
            <li><a href="#"> <i class="material-icons">star_rate</i>Comentario</a></li>
      </ul>
	
	<!-- Pie de pagina -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ asset('plugin/choosen/chosen.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>