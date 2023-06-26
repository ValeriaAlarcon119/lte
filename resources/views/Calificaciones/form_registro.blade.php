@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class='container-fluid' style='width: 600px'>
        <h1>Registro de Calificaciones</h1>
    </div>


@stop

@section('content')     
    <form action="{{url('/calificaciones/registrar')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Calificacion</label>
                <input type="text" class="form-control" id="calificacion" placeholder="Calificacion" name="calificacion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Estudiante</label>
                <input type="text" class="form-control" id="estudiante" placeholder="Estudiante" name="estudiante">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Materia</label>
                <input type="text" class="form-control" id="materia" placeholder="Materia" name="materia">
            </div>
            <div class="mb-3">
                <button style="margin-left:500px" class ="btn btn-info" type="submit">Registrar</button>
            </div>
    </form>



@stop
