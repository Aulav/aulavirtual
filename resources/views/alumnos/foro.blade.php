@extends('plantillas.main-alumno2')
@section('title', 'Foro')

@section('menu')
	@include('plantillas.partes.main-alumno2')
@endsection
@section('contenido')

    <div class="row"><!--inicia todo el contenido de la pagina-->
      
      <div class="col s12 m8 l9"><!--start contenido dinamico de la pagina-->

        <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Tema
          <i class="material-icons right">send</i>
        </button><br />

        <div class="row">
              <div class="col s9">
              <form class="">
              <h5>Foro | Preguntas y respuestas recientes</h5>
                <table class="bordered responsive-table">
                  <thead>
                    <tr>
                      <td></td>
                      <td><b></td>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td><span class="btn-floating btn-large waves-effect waves-light green">
                          <span>1</span>
                          <span> voto</span>
                          </span>
                        <span class="btn-floating btn-large waves-effect waves-light red">
                          <span>0</span>
                          <span> resp.</span>
                        </span>
                        <span <a class="btn-floating btn-large waves-effect waves-light cyan">
                          <span>5</span>
                          <span> visitas</span>
                        </span>
                        </td>
                    <td><a href="">Acertijo matemático para pensar</a><br><p class="p-text"> respondido por <a href="">Alex Trejo</a> Hace 2 dias <a href="">Tareas</p></a></td>
                    </tr>

                    <tr>
                    <td><span class="btn-floating btn-large waves-effect waves-light green">
                          <span>1</span>
                          <span> voto</span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light red">
                          <span>3</span>
                          <span> resp.</span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light cyan">
                          <span>10</span>
                          <span>visitas</span>
                        </span>
                        </td>
                    <td><a href="">¿Cuántos subgrupos puede tener un magma?</a><br><p class="p-text"> respondido por <a href="">Alex Trejo</a> Hace 2 dias <a href="">Preguntas</p></a></td>
                    </tr>

                    <tr>
                    <td><span class="btn-floating btn-large waves-effect waves-light green">
                          <span>0</span>
                          <span>voto</span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light red">
                          <span>0</span>
                          <span><p>resp.</p></span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light cyan">
                          <span>9</span>
                          <span> visitas</span>
                        </span>
                        </td>
                    <td><a href="">Dos espacios topoológicos distintos pero muy parecidos (parte 2)</a><br><p class="p-text"> respondido por<a href=""> Alex Trejo</a> Hace 2 dias <a href="">Historia</p></a></td>
                    </tr>

                    <tr>
                    <td><span class="btn-floating btn-large waves-effect waves-light green">
                          <span>0</span>
                          <span>voto</span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light red">
                          <span>0</span>
                          <span><p>resp.</p></span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light cyan">
                          <span>9</span>
                          <span> visitas</span>
                        </span>
                        </td>
                    <td><a href="">Espacios y subespacios vectoriales</a><br><p class="p-text"> respondido por<a href=""> Alex Trejo</a> Hace 2 dias <a href="">Computacion</p></a></td>
                    </tr>

                    <tr>
                    <td><span class="btn-floating btn-large waves-effect waves-light green">
                          <span>0</span>
                          <span>voto</span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light red">
                          <span>0</span>
                          <span><p>resp.</p></span>
                        </span>
                        <span class="btn-floating btn-large waves-effect waves-light cyan">
                          <span>9</span>
                          <span> visitas</span>
                        </span>
                        </td>
                    <td><a href="">¿Cómo demuestro por definición el siguiente límite?</a><br><p class="p-text"> respondido por
                    <a href=""> Alex Trejo</a> Hace 2 dias <a href="">Interes general</p></a></td>
                    </tr>

                  </tbody>
                </table>
                </form>
              </div>
        


          <div class="row">
              <div class="col s3" align="center">
              <form class="">
                <table class="bordered responsive-table" align="right">
                  <thead>
                    <tr>
                      <td><b>Todas las categorias</td>
                      <td></td>
                      </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td><a href="">Tareas</a></td>
                    <td>(29)</td>
                    </tr>

                    <tr>
                    <td><a href="">Preguntas</a></td>
                    <td>(12)</td>
                    </tr>

                    <tr>
                    <td><a href="">Interes general</a></td>
                    <td>(13)</td>
                    </tr>

                    <tr>
                    <td><a href="">Historia</a></td>
                    <td>(10)</td>
                    </tr>

                    <tr>
                    <td><a href="">Computación</a></td>
                    <td>(15)</td>
                    </tr>

                    <tr>
                    <td><a href="">Libros</a></td>>
                    <td>(20)</td>
                    </tr>

                  </tbody>
                </table>
                </form>
              </div>
          </div>

      
      </div>
        
      </div>
    </div>
 

 @endsection