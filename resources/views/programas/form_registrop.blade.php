@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class='container-fluid' style='width: 600px'>
        <h1>Registro de Programas</h1>
    </div>


@stop

@section('content')     
    <form action="{{url('/programas/registrar')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Codigo programa</label>
                <input type="text" class="form-control" id="codprograma" placeholder="Codigo" name="codprograma">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre del programa</label>
                <input type="text" class="form-control" id="nomprograma" placeholder="Nombre" name="nomprograma">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Facultad</label>
                <input type="text" class="form-control" id="facultad" placeholder="Facultad" name="facultad">
            </div>
            <div class="mb-3">
                <button style="margin-left:500px" class ="btn btn-info" type="submit">Registrar</button>
            </div>
    </form>



@stop

