@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
    <p>Listado de Programas</p>
    <a class ="btn btn-info" href="/programas/registrar">registrar</a>
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
    @foreach ($programas as $programa)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$programa->codprograma}}</td>
      <td>{{$programa->nomprograma}}</td>
      <td>
        <a class ="btn btn-primary">Editar</a>
        <a class ="btn btn-danger" href="{{route('eliminarPrograma', $programa->codprograma)}}">Eliminar</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>



@stop

@section('content')
    <p>Listado de Facultades</p>



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
    <h1>Facultades</h1>


@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
