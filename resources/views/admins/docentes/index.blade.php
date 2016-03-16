@extends('plantillas.main')
@section('title', 'Panel del Docente') 

@section('contenido')

    <!-- Este row probablemente se quite de aqui -->
    <div class="row">
        <div class="col s12">
            @if (Session::has('message'))
                <p class="flow-text center">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    <!-- /Este row probablemente se quite de aqui -->
    <div class="row center">
        <a class="btn-large waves-effect waves-light btn light-blue accent-3  z-depth-5 left" 
            href="{{ route('docente.panel.create')}}">
                Crear nuevo Docente
        </a>        
    </div>
    <br>
    <div class="row">
        <div class="col s12">
            <h4>Docentes</h4>
            <table class="borered highlight responsive-table">
                <thead>
                  <tr>
                      <th data-field="intitucion">Nombre</th>
                      <th data-field="direccion">Apllido Paterno</th>
                      <th data-field="telefono">Apellido Materno</th>
                      <th data-field="clave">Usuario</th>
                      <th data-field="clave">Password</th>
                      <th data-field="clave">E-mail</th>
                      <th data-field="editar">Editar</th>
                      <th data-field="eliminar">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->name }}</td>
                        <td>{{ $docente->ap_paterno }}</td>
                        <td>{{ $docente->ap_materno }}</td>
                        <td>{{ $docente->user }}</td>
                        <td>{{ $docente->password }}</td>
                        <td>{{ $docente->email }}</td>
                        <td>
                            <a href="{{ route('docente.panel.edit', $docente->id) }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar docente">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            {!!Form::open(['route'=>['docente.panel.destroy', $docente->id], 'method'=>'DELETE'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn red'])!!}
                            {!!Form::close()!!}
                           <!-- <a href="{{ route('docente.panel.destroy', $docente->id) }}" onclick="return confirm('Seguro desea eliminar este docente?')" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar Docente">
                                <i class="material-icons">delete</i>
                            </a>-->
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>            
        </div>
    </div>
    <div class="row">
        <div class="col s12 center">
            {{ $docentes->render() }}
        </div>
    </div>
@endsection