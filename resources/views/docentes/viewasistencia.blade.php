@extends('plantillas.main-docente')
@section('title', 'Panel Docentes')
@section('menu')
  @include('plantillas.partes.menu-docente')
@endsection
@section('contenido')
<div class="row card-panel">
          <a href="#add_clase" class="waves-effect waves-light btn modal-trigger blue-grey darken-4"><i class="material-icons">print</i>Imprimir</a>
        </div>
       <table class="responsive-table">
         <thead>
           <th>Alumno</th>
           <th>29 Lu </th>
           <th>01 Ma</th>
           <th>02 Mie</th>
           <th>03 Jue</th>
           <th>04 Vie</th>
           <th>05 Sab</th>
           <th>06 Dom</th>
         </thead>
         <tbody>
           <tr>
             <td>Felipe Guzman</td>
             <td><input type="text" placeholder="Asistio" disabled=""></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
           </tr>
            <tr>
             <td>Damesio John</td>
             <td><input type="text" placeholder="Falta" disabled=""></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
           </tr>
            <tr>
             <td>Adivina Dora de Futuro</td>
             <td><input type="text" placeholder="Asistencia" disabled></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
           </tr>
            <tr>
             <td>Alan Brito Delgado</td>
             <td><input type="text" placeholder="asistencia" disabled></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
             <td><input type="text"></td>
           </tr>
         </tbody>
       </table>
@endsection