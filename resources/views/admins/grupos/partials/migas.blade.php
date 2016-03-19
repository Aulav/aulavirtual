<div class="row">
    <div class="col s12">
        <nav>
            <div class="nav-wrapper teal darken-1">
                <div class="col s12">
                <a href="{{ asset('/grupo/panel') }}" class="breadcrumb">Atrás</a>
                @if ( isset($grupo) )
                    <span class="breadcrumb">Editar grupo {{ $grupo->name }}</span>
                @else
                    <span class="breadcrumb">Crear grupo</span>
                @endif
                </div>
            </div>
        </nav>
    </div>
</div>