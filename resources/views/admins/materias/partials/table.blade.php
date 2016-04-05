<div class="row">
    <div class="col s12">
    	<h4>Mis Materias</h4>
    	<table class="borered highlight responsive-table">
		    <thead>
		        <tr>
		             <th data-field="intitucion">Nombre</th>
		             <th data-field="direccion">Clave</th>
		             <th data-field="telefono">Número de unidades</th>
		             <th data-field="editar">Editar</th>
		             <th data-field="eliminar">Eliminar</th>
		             <th data-field="temario">Temario</th>
		        </tr>
			</thead>
		    <tbody>
		    <tr><td><strong>1 semestre</strong></strong></td></tr>
		        @foreach ($materias as $materia)
		        	<tr>
		          		<td>{{ $materia->name }}</td>
		          		<td>{{ $materia->clave_materia }}</td>
		          		<td>{{ $materia->numero_unidades }}</td>
		          		<td>
		          			<a href="{{ route('materia.panel.edit', $materia->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar materia">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{ route('materia.panel.destroy', $materia->id) }}" onclick="return confirm('Seguro desea eliminar esta materia?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar materia">
		          				<i class="material-icons">delete</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{url('/temarios/temario_1459810042.pdf')}}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ver Temario">
		          				<i class="material-icons">visibility</i>
		          			</a>
		          		
		          		</td>

		        	</tr>
		        	
    			@endforeach
    
        	</tbody>
      	</table>   			
    </div>
</div>