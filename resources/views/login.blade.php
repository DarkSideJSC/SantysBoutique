@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <form action="{{ route('inicio.usuario') }}">
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form>
                <div class="input-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" required />
                </div>
                <div class="input-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required />
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>

    </form>
@endsection