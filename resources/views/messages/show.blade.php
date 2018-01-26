@extends('layout')
@section('contenido')
    <h1>Mensaje</h1>
    <p>Enviado por {{ $mensaje->nombre }} y su email es {{$mensaje->email}}</p>
    <p> {{$mensaje->mensaje}}</p>

@stop
