@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    @if(session()->has('info'))

        <h2>{{ session('info') }}</h2>

    @else
        <h2>Escribeme</h2>
        <form action="{{ route('mensajes.store') }}" method="post">
            {{--esto crea el tocken para poder validar para pasar el middleware devuelve el tocken de la sesion--}}
            {!! csrf_field() !!}
            <p><label for="nombre">
                    Nombre
                    <input type="text" name="nombre" value="{{old('nombre')}}">
                    {!!   $errors->first('nombre','<span class=error>:message</span>')!!}
                </label>
            </p>
            <p>
                <label for="email">
                    Email
                    <input type="email" name="email" value="{{old('email')}}">
                    {!!   $errors->first('email','<span class=error>:message</span>')!!}
                </label>
            </p>
            <p><label for="texto">
                    Mensaje
                    <textarea name="texto">{{old('texto')}} </textarea>
                    {!!   $errors->first('texto','<span class=error>:message</span>')!!}

                </label>
            </p>
            <input type="submit" value="Enviar">
        </form>
    @endif
@stop