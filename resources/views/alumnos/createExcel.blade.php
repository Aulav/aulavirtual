@extends('plantillas.main')
@section('title', 'Crear archivo de Excel')

@section('menu')
  @include('plantillas.partes.menu')
@endsection

@section('contenido')
{!! Form::open(['route' =>'alumno.import.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <p>Si desea puede subir aquí un listado de archivo en formato CSV (Excel) Impirma la plantilla <a href="plantilla.blade.php">Aquí</a></p>
        <div class="row">
            <div class="col s12 m12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Archivo</span>
                       
                        {!! Form::file('archivo')!!}
                       
                    </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" value="Ningún archivo seleccionado" type="text">
                </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col s12">
                    {!! Form::submit('Crear alumno', ['class' => 'btn']) !!}
                </div>  
            </div>

{!! Form::close()!!}
@endsection