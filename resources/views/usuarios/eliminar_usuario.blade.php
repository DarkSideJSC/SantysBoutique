@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@endsection

@section('content')

<div class="usuarios-container"> 
    <h1>Esta seguro de elimnar el usuario?</h1>
    <form action="{{ route('eliminado.usuario',$d=$usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre"> Nombre </label>
        <input type="text" name="nombre" id="nombre" value="{{$d->nombre}}" disabled><br>
        <label for="ap_paterno"> Apellido Paterno </label>
        <input type="text" name="ap_paterno" id="ap_paterno" value="{{$d->ap_paterno}}" disabled><br>
        <label for="ap_materno"> Apellido Materno </label>
        <input type="text" name="ap_materno" id="ap_materno" value="{{$d->ap_materno}}"disabled><br>
        <label for="correo"> Correo </label>
        <input type="email" name="correo" id="correo" value="{{$d->correo}}" disabled><br>
        <label for="documento_identidad"> Documento de Identidad </label>
        <input type="text" name="documento_identidad" id="documento_identidad" value="{{$d->documento_identidad}}" disabled><br>
        <label for="rol"> Rol </label>
        <input type="text" name="rol" id="rol" value="{{$d->rol}}" disabled><br>
       <br>
        <input type="submit" value="Eliminar">
    </form>
</div>
@endsection