@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@endsection
@section('content')
<div class="usuarios-container"> 
<h1>Creación de usuarios</h1>
    <form action="{{ route('crear.usuario') }}" method="POST">
        @csrf
        <label for="nombre"> Nombre </label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="ap_paterno"> Apellido Paterno </label>
        <input type="text" name="ap_paterno" id="ap_paterno" required><br>
        <label for="ap_materno"> Apellido Materno </label>
        <input type="text" name="ap_materno" id="ap_materno" required><br>
        <label for="correo"> Correo </label>
        <input type="email" name="correo" id="correo" required><br>
        <label for="password"> Contraseña </label>
        <input type="password" name="password" id="password" required value="clave"><br>
        <label for="documento_identidad"> Documento de Identidad </label>
        <input type="text" name="documento_identidad" id="documento_identidad" required><br>
        <label for="rol"> Rol </label>
        <select name="rol" id="rol">
            <option value="administrador">Administrador</option>
            <option value="dependiente">Dependiente</option>
        </select><br>
        <input type="submit" value="Crear">
    </form>
</div>
@endsection