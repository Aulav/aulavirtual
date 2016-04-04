@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<div class="col s4 ">
        <a href="#add_tarea" class="waves-effect waves-light btn modal-trigger blue-grey darken-4"><i class="material-icons">note_add</i>Crear nueva Tarea</a>
        </div>
        <div class="row card-panel">
          <div class="panel panel-primario"><div class="panel-heading"><h5>Lista de Tareas</h5></div></div>
          <table class="responsive-table bordered">
            <thead>
              <tr>
                <th>Tareas</th>
                <th>Para</th>
                <th>Categoria</th>
                <th>Entregas</th>
                <th>Comentarios</th>
             
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Historia de Benito Juarez</td>
                <td>1° A</td>
                <td>Historia</td>
                <td>10</td>
                <td>5</td>
              
               
              </tr>
              <tr>
                <td>Teoria de las Telecom</td>
                <td>3° A</td>
                <td>Tecnologia</td>
                <td>4</td>
                <td>10</td>
                
              </tr>
              <tr>
                <td>Diagrama de Flujo del sistema</td>
                <td>2° A</td>
                <td>Politica</td>
                <td>8</td>
                <td>4</td>
                
              </tr>
            </tbody>
            
          </table>
        </div>
@endsection