<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    @yield('line-styles')
</head>
<body>
    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <img src="/img/icon.png" alt="iconeHeader">
                </a>
            </div>
            <ul class="navbar-nav">
                {{--li.nav-item>a.nav-link--}}
                <li class="nav-item"><a href="/" class="nav-link">Listar elementos</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Pesquisar existentes</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Contato</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <div id="conteudo">
        @yield('conteudo')
    </div>
</body>
</html>
