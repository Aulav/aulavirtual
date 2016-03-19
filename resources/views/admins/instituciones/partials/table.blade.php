    <div class="row">
    	<div class="col s12">
    		<h4>Mis Instituciones</h4>
    		<table class="borered highlight responsive-table">
		        <thead>
		          <tr>
		              <th data-field="intitucion">Institución</th>
		              <th data-field="direccion">Dirección</th>
		              <th data-field="telefono">Teléfono</th>
		              <th data-field="clave">Clave</th>
		              <th data-field="editar">Editar</th>
		              <th data-field="eliminar">Eliminar</th>
		          </tr>
		        </thead>
		        <tbody>
		        @foreach ($instituciones as $institucion)
		        	<tr>
		          		<td>{{ $institucion->name }}</td>
		          		<td>{{ $institucion->direccion }}</td>
		          		<td>{{ $institucion->tel }}</td>
		          		<td>{{ $institucion->clave }}</td>
		          		<td>
		          			<a href="{{ route('institucion.panel.edit', $institucion->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar institución">
		          				<i class="material-icons">edit</i>
		          			</a>
		          		</td>
		          		<td>
		          			<a href="{{ route('institucion.panel.destroy', $institucion->id) }}" onclick="return confirm('Seguro desea eliminar esta institucion?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar institución">
		          				<i class="material-icons">delete</i>
		          			</a>
		          		</td>
		        	</tr>
    			@endforeach
        		</tbody>
      		</table>   			
    	</div>
    </div>