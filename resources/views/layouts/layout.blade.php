<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}" class="{{ setActive('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('programas') }}" class="{{ setActive('programas') }}">Programas</a></li>
            <li><a href="{{ route('talleres') }}" class="{{ setActive('talleres') }}">Talleres</a></li>
            <li><a href="{{ route('asesoramiento') }}" class="{{ setActive('asesoramiento') }}">Asesoramiento</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ setActive('contacto') }}">Contacto</a></li>
        </ul>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>


