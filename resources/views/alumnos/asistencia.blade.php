@extends('plantillas.main-alumno2')
@section('title', 'Asistencia')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')




   
    <div class="row"><!--inicia todo el contenido de la pagina-->
      
      <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->
        
        <div class="row card-panel">
          <a href="">Asistencia de Abril</a>
        </div>
       <table class="responsive-table">
         <thead>
           <th>Alumno</th>
           <th>04 Lun </th>
           <th>05 Ma</th>
           <th>06 Mie</th>
           <th>07 Jue</th>
           <th>08 Vie</th>
           <th>05 Sab</th>
           <th>06 Dom</th>
         </thead>
         <tbody>
           <tr>
             <td>Felipe Guzman</td>
             <td><input type="text" placeholder="Asistio" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
             <td><input type="text" placeholder="" disabled=""></td>
           </tr>
         </tbody>
       </table>
      
    </div><!--End contenido de la pagina-->
  </div><!--end div principal-->

@endsection