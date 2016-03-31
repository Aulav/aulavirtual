<!--inithial menu-->
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content ">
        <li><a href="{{ asset('admin/profile') }}"><i class="material-icons ">person</i>Perfíl</a></li>
        <li class="divider"></li>
        @if (Session::get('rol') == 1)
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 2 )
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('alumno/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @endif


    </ul>
    <ul id="dropdown2" class="dropdown-content">
       <li><a href="{{ asset('/examen/panel') }}"> <i class="material-icons">assignment</i>Examenes</a></li>
        <li class="divider"></li>
        <li><a href="{{ asset('/ficha/panel') }}"><i class="material-icons">speaker_notes</i>Tarjetas de estudio</a></li>
        <li class="divider"></li>
        <li><a href="alumnos/foro.html"> <i class="material-icons">chat</i>Foro</a></li>
    </ul>
        
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="profile_user.html"><i class="material-icons">person</i>Perfil</a></li>
        <li class="divider"></li>
        @if (Session::get('rol') == 1)
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 2 )
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('alumno/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @endif
    </ul>
    <ul id="dropdown2" class="dropdown-content">
       <li><a href="{{ asset('/examen/panel') }}"> <i class="material-icons">assignment</i>Examenes</a></li>
        <li class="divider"></li>
        <li><a href="{{ asset('/ficha/panel') }}"><i class="material-icons">speaker_notes</i>Tarjetas de estudio</a></li>
        <li class="divider"></li>
        <li><a href="alumnos/foro.html"> <i class="material-icons">chat</i>Foro</a></li>
    </ul>
    <!--inithial nav-->
    <nav class="teal darken-1">
        <div class="nav-wrapper">
            <a href="index.html" class="brand-logo logo-left">PLATAFORMA EDUCATIVA</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ asset('/institucion/panel')}}" >Institucion</a></li>
            <li><a href="#modal-msj" class="modal-trigger">Mensajes</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Utilidades<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="admins.html" data-activates="dropdown1">{{ Session::get('email') }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Institucion</a></li>
            <li><a href="badges.html">Mensajes</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Utilidades<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Session::get('email') }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        </div>
    </nav><!--end nav-->
	