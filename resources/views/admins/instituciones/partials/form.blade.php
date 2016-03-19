<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">school</i>
        {!! Form::label('name', 'Nombre de la institución', ['for' => 'icon-prefix']) !!}
        {!! Form::text('name', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el nombre', 'id' => 'icon-prefix']) !!}
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
        {!! Form::label('clave', 'Clave de la institución', ['for' => 'icon-prefix']) !!}
        {!! Form::text('clave', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la clave', 'id' => 'icon-prefix']) !!}
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">home</i>
        {!! Form::label('direccion', 'Dirección de la institución', ['for' => 'icon-prefix']) !!}
        {!! Form::text('direccion', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la dirección', 'id' => 'icon-prefix']) !!}
    </div>      
    <div class="input-field col s6">
      	<i class="material-icons prefix">phone</i>
       	{!! Form::label('tel', 'Teléfono', ['for' => 'icon-prefix']) !!}
      	{!! Form::text('tel', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el teléfono', 'id' => 'icon-prefix']) !!}
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
       	<i class="material-icons prefix">email</i>
       	{!! Form::label('email', 'Correo de la institución', ['for' => 'icon-prefix']) !!}
       	{!! Form::text('email', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el correo', 'id' => 'icon-prefix']) !!}
    </div>
    <div class="input-field col s6">
      	<i class="material-icons prefix">web</i>
        {!! Form::label('web', 'Página web de la institución', ['for' => 'icon-prefix']) !!}
        {!! Form::text('web', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí la página web', 'id' => 'icon-prefix']) !!}
    </div>
</div>