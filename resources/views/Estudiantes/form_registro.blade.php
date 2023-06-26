@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class='container-fluid' style='width: 600px'>
        <h1>Registro de Estudiantes</h1>
    </div>


@stop

@section('content')     
    <form action="{{url('/estudiantes/registrar')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Codigo Estudiante</label>
                <input type="input" class="form-control" id="codestudiante" placeholder="Codigo" name="codestudiante">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre </label>
                <input type="input" class="form-control" id="nomestudiante" placeholder="Nombre" name="nomestudiante">
            </div>
            <div class="mb-3">
                <button style="margin-left:500px" class ="btn btn-info" type="submit">Registrar</button>
            </div>
    </form>



@stop