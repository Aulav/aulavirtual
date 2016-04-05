@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<!--end paginacion de usuario-->
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
                <th>status</th>
                <th>Entregas</th>
                <th></th>
             
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Historia de Benito Juarez</td>
                <td>1° A</td>
                <td>Cerrado</td>
                <td>10</td>
                <td><a href="#modal-edit" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Editar Admin"><i class="material-icons" data-tooltip="I am tooltip">mode_edit</i></a></td>
              </tr>
              <tr>
                <td>Teoria de las Telecom</td>
                <td>3° A</td>
                <td>Abierta</td>
                <td>4</td>
                <td><a href="#modal-edit" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Editar Admin"><i class="material-icons" data-tooltip="I am tooltip">mode_edit</i></a></td>
              </tr>
              <tr>
                <td>Diagrama de Flujo del sistema</td>
                <td>2° A</td>
                <td>Cerrado</td>
                <td>8</td>
                 <td><a href="#modal-edit" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Editar Admin"><i class="material-icons" data-tooltip="I am tooltip">mode_edit</i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
@endsection