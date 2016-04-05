@extends('plantillas.main-alumno2')
@section('title', 'Mensajes de Alumnos')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')

     
    <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->
        
          
    </div>

    <div class="row">
              <div class="col s10">
                
              <form class="ibody_docente" action="#" >
                <div class="titulo_docente">
                    <h4 align="center" class="white-text">Enviar correo</h4>
                </div>
                  <div class="row">
                    <div class="input-field col s5">
                      <input type="text" id="nombre">
                      <label for="nombre">Para:</label>
                    </div>

                    <div class="input-field col s5">
                      <input type="text" id="tema">
                      <label for="tema">Tema:</label>
                    </div>

                        <fieldset>
                              <div class="form-group">
                                 <label class="col-md-4 control-label" for="fileimegen">Adjuntar archivo:</label>
                                  <div class="col-md-4">
                                    <input id="archivo" name="archivo" class="input-file" type="file">
                                  </div>
                              </div>
                        </fieldset>                      

                  </div>

                  <div class="row">
                    <div class="input-field">
                      <textarea name="textarea" id="textarea" cols="30" rows="5" class="materialize-textarea"></textarea>
                      <label for="textarea">Mensaje:</label>
                    </div>
                  </div>

                  <br>
                  <div class="boton_docente">
                    <a class="waves-effect waves-light btn blue"><i class="material-icons left">email</i>Enviar</a>
                    <a href="docente.html" class="waves-effect waves-light btn red"><i class="material-icons left">input</i>Cancelar</a>
                  </div>
                  <br><br>
                </div>

              </form>
              </div>
          </div>

  </div><!--end preloader-->




@endsection