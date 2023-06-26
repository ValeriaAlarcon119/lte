@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
    <p>Listado de Estudiantes</p>
    <a class="btn btn-info" href="/estudiantes/registrar">Adicionar</a>
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
            @foreach ($estudiantes as $estudiante)
                @php
                    $row++;
                @endphp
                <tr>
                    <th scope="row">{{ $row }}</th>
                    <td>{{ $estudiante->codestudiante }}</td>
                    <td>{{ $estudiante->nomestudiante }}</td>
                    <td>
                        <a class="btn btn-primary">Editar</a>
                        <a class="btn btn-danger"
                            href="{{ route('eliminarEstudiantes', $estudiante->codestudiante) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
