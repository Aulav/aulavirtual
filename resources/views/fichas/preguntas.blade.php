@for ($i = 1; $i <= $num ; $i++)
	<div class="col s6">
		{!! Form::label('pregunta', 'Pregunta ' . $i) !!}
		{!! Form::text('pregunta[]', null, ['placeholder' => 'Escribe aquí la pregunta']) !!}
	</div>
	<div class="col s6">
		{!! Form::label('respuesta', 'Respuesta ' . $i) !!}
		{!! Form::text('respuesta[]', null, ['placeholder' => 'Escribe aquí la repuesta']) !!}
	</div>
@endfor