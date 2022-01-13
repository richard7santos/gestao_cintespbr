<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão Cintesp.Br - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>

    <body>
        @include('site.layouts._partials.header')
        @yield('conteudo')
        @include('site.layouts._partials.footer')
    </body>
</html>
