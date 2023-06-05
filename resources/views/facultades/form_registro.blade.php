@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class='container-fluid' style='width: 600px'>
        <h1>Registro de facultades</h1>
    </div>


@stop

@section('content')     
    <form action="{{url('/facultades/registrar')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Codigo Facultad</label>
                <input type="input" class="form-control" id="codfacultad" placeholder="Codigo" name="codfacultad">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de la Facultad</label>
                <input type="input" class="form-control" id="nomfacultad" placeholder="Nombre" name="nomfacultad">
            </div>
            <div class="mb-3">
                <button style="margin-left:500px" class ="btn btn-info" type="submit">Registrar</button>
            </div>
    </form>



@stop

