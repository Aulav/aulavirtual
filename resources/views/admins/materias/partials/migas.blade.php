<div class="row">
    <div class="col s12">
        <nav>
            <div class="nav-wrapper teal darken-1">
                <div class="col s12">
                    <a href="{{ asset('/materia/panel') }}" class="breadcrumb">Atrás</a>
                    @if ( isset($materia) )
                        <span class="breadcrumb">Editar materia {{ $materia->name }}</span>
                    @else
                        <span class="breadcrumb">Crear materia</span>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>