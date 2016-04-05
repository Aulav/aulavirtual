@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<div class="col s12"><!--start contenido dinamico de la pagina-->
        
        <!--end paginacion de usuario-->
        <a href="#add_clase" class="waves-effect waves-light btn modal-trigger blue-grey darken-4">Crear nueva clase</a>
        <div class="row">
          <div class="panel panel-primary"><div class="panel-heading"><h5>Clases</h5></div></div>
          <table class="responsive-table bordered">
            <thead>
              <tr>
                <th>Periodo 2016-2017</th>
                <th><i class="material-icons">group</i></th>
                <th><i class="material-icons">insert_chart</i></th>
                <th><i class="material-icons">error</i></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($materias as $materia)
              <tr>
                <td><a href="{{ asset('/docente/materia')}}">{{ $materia->name}}</a></td>
                <td>20%</td>
                <td>20%</td>
                <td>30%</td>
                <td><a href="#modal-drop" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar Materia"><i class="material-icons">delete</i></a></td>
              </tr>
               <!--<tr>
                <td>Taller de Lectura y Redaccion l</td>
                <td>20</td>
                <td>20%</td>
                <td>30%</td>
                <td><a href="#modal-drop" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar Materia"><i class="material-icons">delete</i></a></td>
              </tr>
              <tr>
                <td>Administracion l</td>
                <td>20</td>
                <td>20%</td>
                <td>30%</td>
                <td><a href="#modal-drop" class="btn tooltipped modal-trigger grey darken-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar Materia"><i class="material-icons">delete</i></a></td>
              </tr>-->

            @endforeach
              
            </tbody>
          </table>
        </div>
      
    </div><!--End contenido de la pagina-->
 
 
  <div id="add_clase" class="modal">
    <div class="modal-content">
      <div class="row">
      <form class="col s12">
        <!--<div class="input-field col s12">
          <select>
            <option value="" disabled selected>Seleciona una Institucion</option>
            <option>Ujat</option>
            <option>Uttab</option>
            <option>UMV</option>
          </select>
        </div>-->
        <div class="input-field col s12">
          <i class="material-icons prefix">library_books</i>
          <input type="text" name="name_clase" class="validate">
          <label for="name_clase">Nombre de la Materia</label>
        </div>
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Seleciona un año Escolar</option>
            <option>2016-2017</option>
            <option>2015-2016</option>
            <option>2014-2015</option>
          </select>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">grade</i>
          <input type="text" name="grade_clase" class="validate">
          <label for="grade_clase">Grado y Grupo</label>
        </div>
        <div class="input-field col s12">
         <select>
           <option value="" disabled selected>Seleciona una categoria</option>
           <option>Tecnologia</option>
           <option>Finanzas</option>
           <option>Administracion</option>
           <option>Arte</option>
           <option>Historia</option>
         </select>
        </div>
        <div class="input-field col s6">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>Excelente 10</th>
                <th>Bueno 9</th>
                <th>Malo 8</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="input-field col s12">
          <select>
            <option value="" disabled checked>Seleciona un grupo</option>
            <option>1° A</option>
            <option>1° B</option>
            <option>2° A</option>
            <option>2° C</option>
            <option>3° A</option>
          </select>
        </div>
      </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
      <a href="#" class="modal-action modal-close waves-effect waves-purple btn-flat">Guardar</a>
    </div>
  </div>
@endsection