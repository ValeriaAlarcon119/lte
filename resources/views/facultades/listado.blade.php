@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="text-center">
        <h1>Facultades</h1>
        <p >Listado de Facultades</p>
    
    </div class="text-center">
    <a class="btn btn-info" href="/facultades/registrar">Adicionar</a>
@stop

@section('content')
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
            @foreach ($facultades as $facultad)
                @php
                    $row++;
                @endphp
                <tr>
                    <th scope="row">{{ $row }}</th>
                    <td>{{ $facultad->codfacultad }}</td>
                    <td>{{ $facultad->nomfacultad }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('editarFacultad', $facultad->codfacultad) }}">Editar</a>
                        <a class="btn btn-danger" href="{{ route('eliminarFacultad', $facultad->codfacultad) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
