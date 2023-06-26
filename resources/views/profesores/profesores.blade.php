@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
    <p>Listado de Profesores</p>
    <a class ="btn btn-info" href="/profesores/registrar">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @php
        $row = 0;
    @endphp
    @foreach ($profesores as $profesor)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$profesor->codprofesor}}</td>
      <td>{{$profesor->nomprofesor}}</td>
      <td>
        <a class ="btn btn-primary">Editar</a>
        <a class ="btn btn-danger" href="{{route('eliminarProfesor', $profesor->codprofesor)}}">Eliminar</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>



@stop

@section('content')
    <p>Listado de Profesores</p>



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
    <h1>Profesores</h1>


@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
