<!-- Page Layout here -->  

<div class="collection ">
    <div class="logo"><a id="logo-container" class="brand-logo">
    <a href="{{ asset('admin/profile') }}">
    <img src="{{ asset('/images/user.png') }} " class="responsive-img circle no-grande" >
    </div>
        <p class="user-name"> {{ Session::get('name') }} </p>
        <a href="{{ asset('/grafica/panel') }}" class="collection-item active"><i class="material-icons">home</i>Inicio</a>
        <a href="{{ asset('/alumno/panel')}}" class="collection-item "><i class="material-icons">people</i>Alumnos</a>
        <a href="{{ asset('/docente/panel')}}" class="collection-item"><i class="material-icons">person</i>Docentes</a>

        <a href="{{ asset('/admin/paneladmin')}}" class="collection-item"><i class="material-icons">person</i>Administradores</a>

        <a href="{{ asset('/grupo/panel') }}" class="collection-item"><i class="material-icons">group</i>Grupos</a>
        <a href="{{ asset('/materia/panel')}}" class="collection-item"><i class="material-icons">import_contacts</i>Materias</a>
        <a href="{{ asset('/grafica/panel')}}" class="collection-item"><i class="material-icons">insert_chart</i>Graficas</a>

        <a href="{{ asset('alumno/verasistencia')}}" class="collection-item"><i class="material-icons">check_circle</i>Asistencia</a>
        <a href="{{ asset('admin/imprimir')}}" class="collection-item"><i class="material-icons">print</i>Imprimir</a>
       

        <a href="{{ asset('/alumnos/calendario')}}" class="collection-item"><i class="material-icons">date_range</i>Calendario</a>

    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header"> Configuracion<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="{{ route('institucion.profile')}}" class="collection-item"><i class="material-icons">account_box</i>Cuenta</a></li>
                    <li><a href="{{ asset('admin/logout') }}" class="collection-item"><i class="material-icons">input</i>Salir</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
