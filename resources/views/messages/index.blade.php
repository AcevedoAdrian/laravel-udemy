@extends('layout')

@section('contenido')
    <h1> Todos los mensajes</h1>
    <table width= "100%" border= "1">
        <thead>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    email
                </td>
                <td>
                    mensaje
                </td>
                <td>
                    acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $mensaje)
            <tr>
                <td><a href="{{route('mensajes.show',$mensaje->id)}}">{{ $mensaje->nombre }}</a></td>
                <td>{{ $mensaje->email }}</td>
                <td>{{ $mensaje->mensaje }}</td>
                <td>
                    <a href="{{ route('mensajes.edit', $mensaje->id) }}"> Editar</a>
                    <form  method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}" style="display: inline">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
