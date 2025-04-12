@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@endsection

@section('content')
<div class="usuarios-container">
    <h1>Lista de Usuarios</h1>

    <div class="tabla-responsive">
        <table class="tabla-usuarios">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $d)
                    <tr>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->ap_paterno }}</td>
                        <td>{{ $d->ap_materno }}</td>
                        <td>{{ $d->correo }}</td>
                        <td>{{ $d->rol }}</td>
                        <td><a href="{{ route ('actualiza.usuario', $d->id_usuario)}}"> Actualizar</a></td>
                        <td><a href="{{ route ('elimina.usuario', $d->id_usuario)}}"> Eliminar</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection