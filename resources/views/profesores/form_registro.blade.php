@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class='container-fluid' style='width: 600px'>
        <h1>Registro de Profesores</h1>
    </div>


@stop

@section('content')     
    <form action="{{url('/profesores/registrar')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codprofesor" placeholder="Codigo" name="codprofesor">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nomprofesor" placeholder="Nombre" name="nomprofesor">
            </div>
    
            <div class="mb-3">
                <button style="margin-left:500px" class ="btn btn-info" type="submit">Registrar</button>
            </div>
    </form>
@stop