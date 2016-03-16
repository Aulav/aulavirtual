<!DOCTYPE html>
<html lang="es">
<head>
<!--let browser know website is optimezed for mobile-->
  <meta name="viewport" content="width=device-width, initial.scale=1.0"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="decription" content="Plataforma educativa">
  <title>@yield('title')</title>
  <!--import Google Icon Fonts-->
  <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  <!--import materialize.css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
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
<style type="text/css">
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  .main {
    flex: 1 0 auto;
  }
</style>
</head>
<body>
<!--preoloader para la pagina principal-->

  <div id="preloader">
   <div class="progress">
      <div class="indeterminate"></div>
    </div>
  </div>
   <nav class="nav-login">

    <div class="nav-wrapper">
      
      <img src="{{ asset('images/logo.jpg') }}" class="brand-logo center nav-logo circle responsive-img">

      <ul id="nav-mobile" class="left hide-on-med-and-down"></ul>
    </div>
  </nav>
  <div class="container"><!--star contenido inicial-->
    <div class="col m6">
        <div class="row">
            <div class="col s12">
                @if (Session::has('message'))
                    <p class="content card-panel  red darken-4 z-depth-5 center">
                    {{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
        <div class="row">

            <div class="col s12">
                @if ($errors->has())
                    @foreach ($errors->all() as $error)
                  
                        <p class="content card-panel  red lighten-1 z-depth-5 center">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
        </div>
        @yield('contenido')
    </div>
  </div>
 
  <footer class="page-footer  teal darken-1">        
    <div class="footer-copyright">
      <div class="container">
        © 2016 Copyright Plataforma Educativa
        <a class="grey-text text-lighten-4 right" href="#!">SoftMark Inc.</a>
      </div>
    </div>
  </footer>
   
    <!--import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/funciones.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

</body>
</html>
