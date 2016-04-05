
        <div class="collection ">
          <div class="logo"><a id="logo-container" class="brand-logo">
          <img src="../images/user.png" class="responsive-img circle no-grande"></a>
          </div>
          <p class="user-name">{{ Session::get('name') }}</p>
          <a href="{{asset('/alumno/inicio')}}" class="collection-item active"><i class="material-icons">home</i>Inicio</a>
          <a href="docente.html" class="collection-item"><i class="material-icons">work</i>Tareas</a>
          <a href="{{asset('/alumno/material')}}" class="collection-item"><i class="material-icons">work</i>Material Didactico</a>
          <a href="{{asset('/alumno/alive')}}" class="collection-item"><i class="material-icons">live_tv</i>Clases en vivo</a>
          <a href="alumno.html" class="collection-item "><i class="material-icons">people</i>Calendario</a>
          <a href="admins.html" class="collection-item"><i class="material-icons">group</i>Calificaciones</a>
          <a href="{{asset('/alumno/tareas')}}" class="collection-item"><i class="material-icons">work</i>Tareas</a>
          <a href="docente.html" class="collection-item"><i class="material-icons">work</i>Material Didactico</a>
          <a href="{{asset('alumno/calendario')}}" class="collection-item "><i class="material-icons">people</i>Calendario</a>
          <a href="{{asset('/alumno/calificacion')}}" class="collection-item"><i class="material-icons">group</i>Calificaciones</a>
          <a href="{{asset('/alumno/mensaje')}}" class="collection-item"><i class="material-icons">group</i>Enviar mensajes</a>
          <a href="admins.html" class="collection-item"><i class="material-icons">group</i>Enviar mensajes</a>          
              <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header"> Más<i class="mdi-navigation-arrow-drop-down"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="{{asset('/alumno/asistencia')}}" class="collection-item"><i class="material-icons">account_box</i>Asistencia</a></li>

                    <li><a href="{{asset('/alumno/foro')}}" class="collection-item"><i class="material-icons">account_box</i>Foro</a></li>
                  </ul>
                </div>
              </li>
            </ul>
        </div>