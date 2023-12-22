<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    @yield('line-styles')
</head>
<body>
    <header>
        @include('layouts.navbar')
    </header>
    <main id='conteudos' class='row'>
        @yield('ambienteDeConteudo')
    </main>
    <footer>
        <article>
            <h2>Crie mais um elemento</h2>
            <button>
                <span>Criar elemento</span>
                <span> &rarr; </span>
            </button>
        </article>
        <section class="top">
            <img src="/img/icon.png" alt="">
            <ul>
                <li>
                    <h3>Resources</h3>
                    <a href="">Usage</a>
                    <a href="">Docs</a>
                    <a href="">Support</a>
                    <a href="">Hardware</a>
                </li>
            </ul>
        </section>
        <section class="bottom">&copy; 2023 S'</section>
    </footer>
</body>
</html>
