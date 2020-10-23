<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>@yield('titulo-pagina')</title>
        <head>
        <body>
            <h1>A minha web APP em laravel</h1>
            <h2>@yield('header')</h2>
            @yield('conteudo')
            <div class="menu-rodape">
                <h2> Opções de navegação</h2>
                <a href="{{route('equipas.index')}}">Inicio</a>
                <a href="{{route('equipas.lista')}}"><i class="far fa-trash">Ver Equipas</i></a>
        </body>
    </html>