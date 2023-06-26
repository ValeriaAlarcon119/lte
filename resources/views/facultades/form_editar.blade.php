@extends('adminlte::page')

@section('title', 'Editar Facultad')

@section('content_header')
    <h1>Editar Facultad</h1>
@stop

@section('content') 
    <form action="{{ route('actualizarFacultad', ['id' => $facultad->codfacultad]) }}" method="POST">
   
        @csrf
        @method('PUT')

        <label for="codfacultad">Código de Facultad:</label>
        <input type="text" name="codfacultad" value="{{ $facultad->codfacultad }}"><br><br>

        <label for="nomfacultad">Nombre de Facultad:</label>
        <input type="text" name="nomfacultad" value="{{ $facultad->nomfacultad }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>
@stop
