@extends('plantillas.main')

@section('title', 'Crear ficha de estudio')

@section('menu')
	@include('plantillas.partes.menu-fichas')
@endsection

@section('contenido')
	@include('fichas.partials.migas')	
	<div class="row">
		<div class="col s12">
			<h4>Nueva tarjeta de estudio</h4>
			{!! Form::open(['route' => 'ficha.panel.store', 'method' => 'POST']) !!}
				<div class="row">
				    <div class="input-field col s6">
				        <i class="material-icons prefix">title</i>
				        {!! Form::label('titulo', 'Título de la tarjeta', ['for' => 'icon-prefix']) !!}
				        {!! Form::text('titulo', null, ['class' => 'validate', 'placeholder' => 'Escribe aquí el título', 'id' => 'icon-prefix']) !!}
				    </div>
				    <div class="input-field col s6">
				        {!! Form::select('grupo', $grupos, null, ['placeholder' => 'Seleccione un grupo']) !!}
				    </div>
				</div>				
				<div class="row">
					<div class="col 12 m6">
						{!! Form::label('descripcion', 'Descripción') !!}
						{!! Form::text('descripcion', null, ['class' => 'materialize-textarea', 'placeholder' => 'Escribe aquí la descripción de la tarjeta']) !!}
					</div>
				  	<div class="input-field col s12 m4">
					    <select class="icons" id="questions" onchange="$.respuesta('{{ asset('ficha/getRequest') }}', this.value);">
					    	<option value="" selected>Elije una opción</option>
					    	<option value="5" data-icon="{{ asset('images/formulario_de_fichas.png') }}" class="circle">5 preguntas</option>
					    	<option value="10" data-icon="{{ asset('images/formulario_de_fichas.png') }}" class="circle">10 preguntas</option>
					    	<option value="15" data-icon="{{ asset('images/formulario_de_fichas.png') }}" class="circle">15 preguntas</option>
					    	<option value="20" data-icon="{{ asset('images/formulario_de_fichas.png') }}" class="circle">20 preguntas</option>
					    </select> 
					    <label>¿Cuantas preguntas necesitas?</label>
					</div>
				</div>
				<div class="row">						
						<div id="formulario">
							
						</div>
				</div>				
				<div class="row">
		    	    <div class="col s12">
		      		    {!! Form::submit('Crear tarjeta', ['class' => 'btn']) !!}
		    	    </div>  
        		</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection