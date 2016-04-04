@extends('plantillas.main-alumno2')
@section('title', 'Calificaiones')

@section('menu')
@include('plantillas.partes.main-alumno2')
@endsection
    
@section('contenido')
           <div class="row">
              <div class="col s12">
              <form class="">
              <h5>Calificaciones</h5>
                <table class="bordered responsive-table">
                  <thead>
                    <tr>
                      <td><b>Trabajo</td>
                      <td><b>Resultado</td>
                      <td><b>Posible</td>
                      <td><b>Comentario</td>
                      </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td>Trabajo final</a></td>
                    <td>90%</td>
                    <td>100%</td>
                    <td>falto conclusión</a></td>
                    </tr>

                    <tr>
                    <td>ejercicios</a></td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>-</a></td>
                    </tr>

                    <tr>
                    <td>resumen</a></td>
                    <td>70%</td>
                    <td>100%</td>
                    <td></a></td>
                    </tr>

                  </tbody>
                </table>
                </form>
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Marcador</h5>
                  <a class="waves-effect modal-trigger" href="#modal8"></a>

                  <p>E =Excusado<br>
                     M =Falta, cuenta como cero<br>
                     EC =Crédito Extra</p>
                </div>
              </div>       
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Categorias de tareas</h5>
                  <a class="waves-effect modal-trigger" href="#modal8"></a>

                  <p><li>Tareas contará como el 60% de la calificación.</li><br> 
                     <li>Trabajo Final contará como el 20% de la calificación.</li><br> 
                     <li>Copia contará como el 20% de la calificación.</li></p>
                </div>
              </div>       
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Redondeo</h5>
                  <a class="waves-effect modal-trigger" href="#modal8"></a>

                  <p><li>Redondeo de porcentaje de clase será al número entero más próximo.</li></p>
                </div>
              </div>       
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Escala de Calificación</h5>
                  <a class="waves-effect modal-trigger" href="#modal8"></a>

                  <p> A: 90% - 100%<br>
                      B: 80% - 89.9%<br>
                      C: 70% - 79.9%<br>
                      D: 60% - 69.9%<br>
                      F: 0% - 59.9%</p>
                </div>
              </div>       
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

   
              </div><!--end modal para enviar mensaje-->
      
 @endsection