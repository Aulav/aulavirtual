@extends('plantillas.main')
@section('title', 'Imprimir')
@section('menu')
@include('plantillas.partes.menu')
@endsection
@section('contenido')
  <div class="row">
          <div class="col s12 m6">
              <div class="card z-depth-2">
                
                <div class="card-content responsive">
                  <h5 class="card-title center orange-text">Imprimir reporte de progresos</h5>
                  <a class="waves-effect modal-trigger" href="#modal1"><img src="{{asset('images/print.png') }}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de Progresos:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Imprimir</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center orange-text">Imprimir reporte de progresos con detalles</h5>
                  <a class="waves-effect modal-trigger" href="#modal2"><img src="{{ asset('images/print.png') }}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de Progresos con detalles:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Imprimir</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-2">
                
                <div class="card-content">
                  <h5 class="card-title center orange-text">Imprimir tareas quen faltan</h5>
                  <a class="waves-effect modal-trigger" href="#modal3"><img src="{{ asset('images/print.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal3" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de tareas faltantes:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Imprimir</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content ">
                  <h5 class="card-title center orange-text">Imprimir codigos de acceso de estudiantes</h5>
                  <a class="waves-effect modal-trigger" href="#modal4"><img src="{{ asset('images/print.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal4" class="modal">
                  <div class="modal-content">
                    <h4>Periodo estudiantes:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Imprimir</a>
                  </div>
                </div>
                
              </div>
          </div>



           <div class="col s12 m6">
              <div class="card z-depth-2">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Exportar reporte de progresos</h5>
                  <a class="waves-effect modal-trigger" href="#modal5"><img src="{{ asset('images/exportar.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal5" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de Progresos:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>

                    <div class="col s6">
                    <input type="checkbox" name="grupo1" id="checkbox1">
                    <label for="checkbox1">Word</label>
                    <input type="checkbox" name="grupo1" id="checkbox2">
                    <label for="checkbox2">Excel</label>
                    <input type="checkbox" name="grupo1" id="checkbox3">
                    <label for="checkbox3">PDF</label>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Exportar</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Exportar reporte de progresos con detalles</h5>
                  <a class="waves-effect modal-trigger" href="#modal6"><img src="{{ asset('images/exportar.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal6" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de Progresos con detalles:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>

                    <div class="col s6">
                    <input type="checkbox" name="grupo1" id="checkbox4">
                    <label for="checkbox4">Word</label>
                    <input type="checkbox" name="grupo1" id="checkbox5">
                    <label for="checkbox5">Excel</label>
                    <input type="checkbox" name="grupo1" id="checkbox6">
                    <label for="checkbox6">PDF</label>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Exportar</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-2">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Exportar tareas quen faltan</h5>
                  <a class="waves-effect modal-trigger" href="#modal7"><img src="{{ asset('images/exportar.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal7" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de tareas faltantes:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>

                    <div class="col s6">
                    <input type="checkbox" name="grupo1" id="checkbox7">
                    <label for="checkbox7">Word</label>
                    <input type="checkbox" name="grupo1" id="checkbox8">
                    <label for="checkbox8">Excel</label>
                    <input type="checkbox" name="grupo1" id="checkbox9">
                    <label for="checkbox9">PDF</label>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Exportar</a>
                  </div>
                </div>
                
              </div>
          </div>

          <div class="col s12 m6">
              <div class="card z-depth-3">
                
                <div class="card-content">
                  <h5 class="card-title center cyan-text">Exportar codigos de acceso de estudiantes</h5>
                  <a class="waves-effect modal-trigger" href="#modal8"><img src="{{ asset('images/exportar.png')}}" class="center"  width="60px"></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal8" class="modal">
                  <div class="modal-content">
                    <h4>Periodo de acceso de alumnos:</h4>
                    <div class="row">
                      <select name="" id="">
                        <option value="1">2014</option>
                        <option value="2">2015</option>
                        <option value="3">2016</option>
                      </select>
                    </div>

                    <div class="col s6">
                    <input type="checkbox" name="grupo1" id="checkbox11">
                    <label for="checkbox11">Word</label>
                    <input type="checkbox" name="grupo1" id="checkbox12">
                    <label for="checkbox12">Excel</label>
                    <input type="checkbox" name="grupo1" id="checkbox13">
                    <label for="checkbox13">PDF</label>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="right modal-action modal-close waves-effect">Exportar</a>
                  </div>
                </div>
                
              </div>
          </div>

    </div>

@endsection