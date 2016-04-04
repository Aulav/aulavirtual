@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
 <div class="col s12 "><!--start contenido dinamico de la pagina-->
        
        <div class="col s4">
        <a href="../nueva_asignatura.html" class="waves-effect waves-light btn modal-trigger blue-grey darken-4"><i class="material-icons">note_add</i>Crear nueva Tarea</a>
        </div>
        <!--<div class="col s4">
        <a href="#add_clase" class="waves-effect waves-light btn modal-trigger blue-grey darken-4"><i class="material-icons">settings</i>Opciones</a>
        </div>-->
        
        <div class="col s4">
        <select>
          <option value="" disabled selected>Imprimir Reportes</option>
          <option>Calificaciones</option>
          <option>Informe de los alumnos</option>
        </select>
        </div>
        <div class="row">
          <div class="panel panel-primario"><div class="panel-heading"><h5>Calificaciones</h5></div></div>
          <table class="responsive-table bordered">
            <thead>
              <tr>
                <th>Alumnos</th>
                <th>Calificaciones</th>
                <th>Teoria de la Informatica</th>
                <th>Teoria de las redes</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pedro Rivera</td>
                <td>10</td>
                <td>10</td>
                <td></td>
                <td></td>
               
              </tr>
              <tr>
                <td>Matematicas</td>
                <td>20</td>
                <td>20%</td>
                <td>30%</td>
                
              </tr>
              <tr>
                <td>Español</td>
                <td>20</td>
                <td>20%</td>
                <td>30%</td>
                
              </tr>
            </tbody>
            <tfoot>
              <td>Promedio</td>
              <td>10</td>
              <td>20</td>
              <td>30</td>
            </tfoot>
          </table>
        </div>
        
      
    </div><!--End contenido de la pagina-->
@endsection