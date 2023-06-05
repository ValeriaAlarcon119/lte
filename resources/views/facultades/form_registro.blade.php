@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de facultades</h1>


@stop

@section('content')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre de la Facultad</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Codigo Facultad</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Codigo">
      </div>
      <div class="mb-3">
          <a style="margin-left:500px" class ="btn btn-info" href="/facultades/registrar" type='submit'>Registrar</a>
      </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
