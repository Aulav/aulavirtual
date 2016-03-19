<div class="row">
    <div class="col s12">
    	<h4>Mis Grupos</h4>
    	<table class="borered highlight responsive-table">
		       <thead>
		        <tr>
		            <th data-field="intitucion">Grupo</th>
		            <th data-field="direccion">Grado</th>
		            <th data-field="telefono">Número de alumnos</th>
		            <th data-field="editar">Editar</th>
		            <th data-field="eliminar">Eliminar</th>
		        </tr>
		        </thead>
		    <tbody>
			    @foreach ($grupos as $grupo)
			        <tr>
			          	<td>{{ $grupo->name }}</td>
			          	<td>{{ $grupo->grado }}</td>
			          	<td>{{ $grupo->numero_alumnos }}</td>
			          	<td>
			          		<a href="{{ route('grupo.panel.edit', $grupo->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar grupo">
			          			<i class="material-icons">edit</i>
			          		</a>
			          	</td>
			          	<td>
			          		<a href="{{ route('grupo.panel.destroy', $grupo->id) }}" onclick="return confirm('Seguro desea eliminar este grupo?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar grupo">
			          			<i class="material-icons">delete</i>
			          		</a>
			          	</td>
			        </tr>
	    		@endforeach
        	</tbody>
    	</table>   			
    </div>
</div>