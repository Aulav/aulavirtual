<!--inithial menu-->
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content ">
        <li><a href="{{ asset('alumno/profile') }}"><i class="material-icons ">person</i>profile</a></li>
        <li class="divider"></li>
        @if (Session::get('rol') == 1)
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 2 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 4 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @endif


    </ul>
    <ul id="dropdown2" class="dropdown-content">
       <li><a href="{{ asset('/alumno/examen') }}"> <i class="material-icons">assignment</i>Examenes</a></li>
        <li class="divider"></li>
        <li><a href="{{ asset('/ficha/panel') }}"><i class="material-icons">speaker_notes</i>Tarjetas de estudio</a></li>
        <li class="divider"></li>
        <li><a href="{{ asset('/alumno/foro') }}"> <i class="material-icons">chat</i>Foro</a></li>
    </ul>
        
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ asset('alumno/profile')}}"><i class="material-icons">person</i>Perfil</a></li>
        <li class="divider"></li>
        @if (Session::get('rol') == 1)
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 2 )
            <li><a href="{{ asset('admin/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 3 )
            <li><a href="{{ asset('docente/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @elseif ( Session::get('rol') == 4 )
            <li><a href="{{ asset('alumno/logout') }}"><i class="material-icons">input</i>Salir</a></li>
        @endif
    </ul>
    <ul id="dropdown2" class="dropdown-content">
       <li><a href="{{ asset('/alumnos/examen') }}"> <i class="material-icons">assignment</i>Examenes</a></li>
        <li class="divider"></li>
        <li><a href="{{ asset('/ficha/panel') }}"><i class="material-icons">speaker_notes</i>Tarjetas de estudio</a></li>
        <li class="divider"></li>
        <li><a href="alumnos/foro.html"> <i class="material-icons">chat</i>Foro</a></li>
    </ul>
    <!--inithial nav-->
    <nav class="default_color" >
        <div class="nav-wrapper">
            <a href="{{ asset('/grafica/panel')}}" class="brand-logo logo-left">PLATAFORMA EDUCATIVA</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
           <!-- <li><a href="{{ asset('/institucion/panel')}}" >Institucion</a></li>-->
            <li><a href="#modal-msj" class="modal-trigger">Mensajes</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Utilidades<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="admins.html" data-activates="dropdown1">{{ Session::get('email') }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <!--<li><a href="sass.html">Institucion</a></li>-->
            <li><a href="#modal-msj">Mensajes</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Utilidades<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Session::get('email') }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        </div>
    </nav><!--end nav-->
    <!--star modal messages-->
        <div id="modal-msj" class="modal">
          <div class="modal-content">
            <h4>Enviar mensaje</h4>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="text" class="validate" placeholder="Felipe Guzman" disabled selected >
                    <label for="icon_email">A: </label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mood</i>
                    <input id="icon_msj" type="text" class="validate">
                    <label for="icon_msj">Asunto</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">inbox</i>
                    <textarea id="mensaje" class="materialize-textarea"></textarea>
                    <label for="mensaje">Mensaje</label>
                  </div>
                </div>
                 <div class="row">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Subir archivo</span>
                      <input type="file">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-fixed-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
          </div>
      </div><!--end modal mensaje admin-->
  