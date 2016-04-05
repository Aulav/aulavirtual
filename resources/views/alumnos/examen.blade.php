@extends('plantillas.main-alumno2')
@section('title', 'Foro')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')

      
    
    <div class="row"><!--inicia todo el contenido de la pagina-->
    
      <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->
     
        <!--end paginacion de usuario-->
        <div class="panel panel-primary">
        <div class="panel-heading"><h5>Examenes</h5></div></div>
        
        <div class="col s12">
          <table class="responsive-table">
            <thead>
              <th>Nombre Examen</th>
              <th>status</th>
            </thead>
            <tbody>
              <tr>
                <td><a href="{{asset('/alumno/instruccion')}}">Test de Inteligencia</td>
                <td>Abierto</td>
              </tr>
            </tbody>
          </table>
        </div>
      
    </div><!--End contenido de la pagina-->
  </div><!--end div principal-->
 
  
    

@endsection