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
    <div id="horizontal-bar"></div>
    <div id="conteudo">
        @yield('conteudo')
    </div>
</body>
</html>
