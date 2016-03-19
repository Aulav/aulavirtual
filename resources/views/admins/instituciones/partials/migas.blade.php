<div class="row">
    <div class="col s12">
        <nav>
            <div class="nav-wrapper teal darken-1">
                <div class="col s12">
                    <a href="{{ asset('/admin/panel') }}" class="breadcrumb">Atrás</a>
                    @if ( isset($institucion) )
                        <span class="breadcrumb">Editar institución {{ $institucion->name }} </span>
                    @else
                        <span class="breadcrumb">Crear institución</span>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>