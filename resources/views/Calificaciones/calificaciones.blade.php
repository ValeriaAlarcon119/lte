@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Calificaciones</h1>
    <p>Registro de Calificaciones</p>
    <a class ="btn btn-info" href="/calificaciones/registrar">registrar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Calificacion</th>
      <th scope="col">Estudiante</th>
      <th scope="col">Materia</th>
    </tr>
  </thead>
  <tbody>
    @php
        $row = 0;
    @endphp
    @foreach ($calificaciones as $calificaciones)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$calificaciones->calificacion}}</td>
      <td>{{$calificaciones->estudiante}}</td>
      <td>{{$calificaciones->materia}}</td>
      <td>
        <a class ="btn btn-primary">Editar</a>
        <a class ="btn btn-danger" href="{{route('eliminarCalificaciones', $calificaciones->calificacion)}}">Eliminar</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>



@stop

@section('content')
    <p></p>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>


@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
