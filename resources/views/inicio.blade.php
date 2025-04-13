@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
    <div class="usuarios-container">
        <h1> Bienvenido al sistema: </h1>

        <div class="vertical-menu">
            <a href="#" class="active">Home</a>
            <a href="{{ route('usuarios') }}">Listar Usuarios</a>
            <a href="{{ route ('crea.usuario')}}">Crear Usuario</a>

        </div>
    </div>
@endsection
