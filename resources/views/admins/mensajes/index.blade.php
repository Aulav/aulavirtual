@extends('plantillas.main')
@section('title', 'Crear nueva institución')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
<div class="row">
<h3 class="center">Buzón de Entrada</h3>
	<table class="responsive-table">
	<thead>
          <tr>
              <th data-field="id">Tema</th>
              <th data-field="name">De</th>
              <th data-field="price">Fecha</th>
          </tr>
        </thead>
         <tbody>
          <tr>
            <td><a href="{{route('admin.viewmensaje') }}">Duda Tarea Inteligencia Artificial</a></td>
            <td>sistemas@ahoratabasco.com</td>
            <td>05-04-2016</td>
          </tr>
          
        </tbody>
		
	</table>
</div>
@endsection