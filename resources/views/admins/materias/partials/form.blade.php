<div class="row">
	<div class="row">
            <div class="input-field col s6">
        	   <i class="material-icons prefix">book</i>
        	   {!! Form::label('name', 'Nombre de la materia', ['for' => 'icon-prefix']) !!}
        	   {!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
            </div>
            <div class="input-field col s6">
        	   <i class="material-icons prefix">vpn_key</i>
        	   {!! Form::label('clave_materia', 'Clave de la materia', ['for' => 'icon-prefix']) !!}
        	   {!! Form::text('clave_materia', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la clave', 'id' => 'icon-prefix']) !!}
            </div>
        </div>
        <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">home</i>
        	{!! Form::label('numero_unidades', 'Número de unidades', ['for' => 'icon-prefix']) !!}
        	{!! Form::text('numero_unidades', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el número de unidades', 'id' => 'icon-prefix']) !!}
        </div>
    </div>
</div>