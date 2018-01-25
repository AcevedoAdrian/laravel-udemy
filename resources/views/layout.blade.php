<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso Laravel</title>
    <style>
        .active{
            text-decoration: none;
            color: #2ab27b;
        }
        .error{
            color:red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <header>
        <?php
        function activeMenu($url){
            return request()->is($url) ? 'active' : '';
        }
        ?>
        <!--Imprime por pantalla si se encuentra en la ruta raiz o no -->
        {{--<h1>{{ request()->is('/') ? 'estas en la raiz' : 'no lo estas' }}</h1>--}}
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home')}}">Home</a>
            <a class="{{ activeMenu('saludo/*') }}" href="{{ route('saludos','Invitado')}}">Saludo</a>
            <a class="{{ activeMenu('cantacto') }}" href="{{ route('messages.create')}}">Contactos</a>
        </nav>
    </header>
    @yield('contenido')
</body>
</html>