@extends('layout')

@section('contenido')
<h1>Contactos</h1>
    <h2>Escribeme</h2>
    <form action="mensaje" method="post">
    <p><label for="nombre">
            Nombre
            <input type="text" name="nombre">
        </label>
    </p>
    <p>
        <label for="email">
            Email
            <input type="email" name="email">
        </label>
    </p>
    <p><label for="mensaje">
            Mensaje
            <textarea name="mensaje" id="" cols="30" rows="10">
            </textarea>
        </label>
    </p>
        <input type="submit" value="Enviar">
    </form>
@stop