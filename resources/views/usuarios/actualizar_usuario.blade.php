@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@endsection

@section('content')
    <div class="usuarios-container">
        <h1>Actualizar de usuario</h1>
        <form action="{{ route('actualizado.usuario', $d = $usuario) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" id="nombre" value="{{ $d->nombre }}" required><br>
            <label for="ap_paterno"> Apellido Paterno </label>
            <input type="text" name="ap_paterno" id="ap_paterno" value="{{ $d->ap_paterno }}" required><br>
            <label for="ap_materno"> Apellido Materno </label>
            <input type="text" name="ap_materno" id="ap_materno" value="{{ $d->ap_materno }}"required><br>
            <label for="correo"> Correo </label>
            <input type="email" name="correo" id="correo" value="{{ $d->correo }}" required><br>
            <label for="documento_identidad"> Documento de Identidad </label>
            <input type="text" name="documento_identidad" id="documento_identidad" value="{{ $d->documento_identidad }}"
                required><br>
            <label for="rol"> Rol </label>
            <select name="rol" id="rol">
                <option value="administrador" <?php if ($d->rol == 'administrador') {
                    echo 'selected';    
                }
                ?>>Administrador</option>
                <option value="dependiente" <?php if ($d->rol != 'administrador') {
                    echo 'selected';
                } ?>>Dependiente</option>
            </select>
            <br><button type="submit">Guardar</button>

        </form>
    </div>
@endsection
