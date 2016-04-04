@extends('plantillas.main-alumno')
@section('title', 'Modulo Alumnos')

@section('menu')
@include('plantillas.partes.menu-alumno')
@endsection
@section('contenido')
 <div class="row">
    <div class="col s12">
        <form class="">
            <h5>Mis Clases</h5>
               	<table class="bordered responsive-table">
                  <thead>
                    <tr>
                      <td><b>Clase</td>
                      <td><b>Docente</td>
                      <td><b>Avance</td>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($materias as $materia)
                    <tr>
                    <td><a href=""></a>{{$materia->name}}</td>
                    <td>Octavio Aquino</td>
                    <td>30%</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </form>
              </div>
          </div>
          <!--Inicio modal para enviar mensaje-->
          <div id="modal3" class="modal">

            <div class="input-field col s12">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_email" type="email" class="validate">
                      <label for="icon_email">Email</label>
              </div>

            <div class="modal-content">
              <div class="file-field input-field">
                  <div class="btn">
                      <span>Adjuntar archivo:</span>
                      <input type="file" multiple>
                  </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Ningún archivo seleccionado">
                  </div>
              </div>      
              <div class="row">                     
                <div class="input-field col s12">                         
                  <label for="comment">Comentario:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>       
              </div> 
              </div>      
              <div class="modal-fixed-footer">             
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>             
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
              </div>
              </div><!--end modal para enviar mensaje-->
@endsection