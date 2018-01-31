@extends('layout')

@section('contenido')
    <h1>Editar Mensaje</h1>
    <form  method="POST" action="{{ route('mensajes.update', $mensaje->id) }}">
        {{--esto crea el tocken para poder validar para pasar el middleware devuelve el tocken de la sesion--}}
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <p><label for="nombre">
                Nombre
                <input type="text" name="nombre" value="{{$mensaje->nombre}}">
                {!!   $errors->first('nombre','<span class=error>:message</span>')!!}
            </label>
        </p>
        <p>
            <label for="email">
                Email
                <input type="email" name="email" value="{{$mensaje->email}}">
                {!!   $errors->first('email','<span class=error>:message</span>')!!}
            </label>
        </p>
        <p><label for="texto">
                Mensaje
                <textarea name="texto">{{$mensaje->mensaje}}</textarea>
                {!!   $errors->first('texto','<span class=error>:message</span>')!!}
            </label>
        </p>
        <input type="submit" value="Enviar">
    </form>
@stop