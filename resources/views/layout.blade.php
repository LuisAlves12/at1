<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>@yield('titulo-pagina')</title>
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/all.min.css')}}"> 
        <head>
        <body>
            <h1>A minha web APP em laravel</h1>
            <h2>@yield('header')</h2>
            @yield('conteudo')
            <div class="menu-rodape">
                <h2> Opções de navegação</h2>
                <a href="{{route('equipas.index')}}">Inicio</a>
                <a href="{{route('equipas.lista')}}"><i class="fas fa-trash"></i></a>
            </div>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/all.min.js')}}"></script>
        </body>
    </html>