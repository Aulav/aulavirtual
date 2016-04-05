<!--==============================================
==Version Inicial de la platoforma educativa 1.0
=============F=============G===================
==========================================C======-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>::Plataforma Educativa::</title>
    <!--import Google Icon Fonts-->
  <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- CSS solo para la pagina principal -->
         <link href="{{ asset('front/min/custom-min.css')}}" type="text/css" rel="stylesheet" >
    <link href="{{ asset('front/min/plugin-min.css')}}" type="text/css" rel="stylesheet">
   
    
   
<body id="top" class="scrollspy ">
<!-- animation Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--Navegacion de la pagina principal-->
<div class="navbar-fixed">
    <nav id="nav_plataforma" class="default_color" role="navigation">
        <div class="container">
          <img src="{{ asset('/images/instituto.png')}}" class="logo-img">
            <div class="nav-wrapper">

            <a href="#" id="logo-container" class="brand-logo">INSTITUTO DE ESTUDIOS SUPERIORES</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ asset('admin/panel') }}" class="waves-effect">Administrador</a></li>
                <li><a href="{{ asset('docente/panel') }}">Docente</a></li>
                <li><a href="{{ asset('alumno/panel') }}">Alumno</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="{{ asset('admin/panel') }}">Administrador</a></li>
                <li><a href="{{ asset('docente/panel') }}">Docente</a></li>
                <li><a href="{{ asset('alumno/panel') }}">Alumno</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                
            </div>
        </div> 
    </nav>
</div>
<!--End Navegacion de la pagina principal-->
<div class="section no-pad-bot intro " id="banner_plataform">
    <div class="container">
        <h1 class="text_b center header cd-headline letters type">
            <span>Bienvenido</span>
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Educación</b>
                <b>Virtual</b>
                <b> A Distancia</b>
            </span>
        </h1>
         <div class="row center">
          <!-- <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 " href="">Acceder al aula Iniciar</a> -->
        </div>
    </div>
</div><!--end Navegacion Princiapl-->
<!--Intro Servicios-->
<div id="servicios" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="video-container responsive-video">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card center promo promo-example z-depth-5">
                    <i class="material-icons">info</i>
                    <h5 class="promo-caption">Información</h5>
                    <p class="light center">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes. 
                    </p>
                    <div class="row center">
                         <a class="btn-large waves-effect waves-light btn accent-3  z-depth-5 " href="#modal1" style="background: #30417c;" >Get Iniciar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card center promo promo-example z-depth-5">
                    <i class="material-icons">contacts</i>
                    <h5 class="promo-caption">Contactanos</h5>
                    <p class="light center">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.  
                    </p>
                    <div class="row center">
                         <a class="btn-large waves-effect waves-light btn accent-3  z-depth-5 " href="#modal1" style="background: #30417c;">Get Iniciar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card center promo promo-example z-depth-5">
                    <i class="material-icons">announcement</i>
                    <h5 class="promo-caption">Avisos</h5>
                    <p class="light center">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.  
                    </p>
                    <div class="row center">
                         <a class="btn-large waves-effect waves-light btn  accent-3  z-depth-5 " href="#modal1" style="background: #30417c;">Get Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--en servicios-->
<footer class="page-footer default_color_footer">
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"><img src="{{ asset('/images/icons/you_tube.png') }}"></a>
                <a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"><img src="{{ asset('/images/icons/twitter.png') }}"></a>
                 <a href="#" class="tooltipped " data-position="top" data-delay="50" data-tooltip="Youtebe"><img src="{{ asset('/images/icons/facebook.png') }}"></a> 
              </div>
            </div>
        </div>
    <div class="footer-copyright default_color_footer">
        <div class="container center">
        © 2016 Plataforma Educativa <a class="white-text" href="http://sotfmark.tab">SoftMark Inc.</a>
    </div>
</footer>


     <!--  Scripts para el tema principal-->
    <script src="{{ asset('front/min/plugin-min.js')}}"></script>
    <script src="{{ asset('front/min/custom-min.js')}}"></script>
    </body>
</html>
