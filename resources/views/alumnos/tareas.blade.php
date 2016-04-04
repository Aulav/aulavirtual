@extends('plantillas.main-alumno2')
@section('title', 'Calificaiones')

@section('menu')
@include('plantillas.partes.main-alumno2')
@endsection
    
@section('contenido')
                

           <div class="row">
              <div class="col s12">
              <form class="">
              <h5>Tareas</h5>
                <table class="bordered responsive-table">
                  <thead>
                    <tr>
                      <td><b>Tarea</td>
                      <td><b>Fecha</td>
                      <td><b>Comentarios</td>
                      <td><b>Entregar</td>
                      <td><b>Resultado</td>
                      </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td><a class="waves-effect waves-light btn modal-trigger light-blue accent-3" href="#modal1">Trabajo final</a></td>
                    <td>Lunes, 7 de marzo</td>
                    <td>0</td>
                    <td><a class="waves-effect waves-light btn modal-trigger reen darken-2 accent-3" href="#modal2">entregar</a></td>
                    <td></td>
                    </tr>

                    <tr>
                    <td><a class="waves-effect waves-light btn modal-trigger light-blue accent-3" href="#modal1">ejercicios</a></td>
                    <td>Lunes,14 de marzo</td>
                    <td>0</td>
                    <td><a class="waves-effect waves-light btn modal-trigger reen darken-2 accent-3" href="#modal2">entregar</a></td>
                    <td></a></td>
                    </tr>

                    <tr>
                    <td><a class="waves-effect waves-light btn modal-trigger light-blue accent-3" href="#modal1">resumen</a></td>
                    <td>Lunes,21 de marzo</td>
                    <td>2</td>
                    <td><a class="waves-effect waves-light btn modal-trigger reen darken-2 accent-3" href="#modal2">entregar</a></td>
                    <td></a></td>
                    </tr>

                  </tbody>
                </table>
                </form>
              </div>
          </div>

          <!--Inicio modal para comentario-->
          <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Comentario</h4>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <div class="form-group">
                        <label for="comment">Comentario:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                    </div>   
                  </div>
                </form>
              </div>
          </div>
          <div class="modal-fixed-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
          </div>
        </div><!--end modal comentario-->


          <!--Inicio modal para entregar tareas-->
          <div id="modal2" class="modal">
          <div class="modal-content">

              <div class="file-field input-field">
                  <div class="btn">
                      <span>Subir archivo:</span>
                      <input type="file" multiple>
                  </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Ningún archivo seleccionado">
                  </div>
              </div>      

              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <div class="form-group">
                        <label for="comment">Comentario:</label>
                        <textarea class="form-control" rows="2" id="comment"></textarea>
                      </div>
                    </div>   
                  </div>
                </form>
              </div>
          </div>
          <div class="modal-fixed-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
          </div>
        </div><!--end modal entregar tareas-->

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
                  
          </div>
          
   
  
      
 @endsection