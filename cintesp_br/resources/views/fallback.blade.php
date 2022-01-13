<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gestão Cintesp.Br - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="bg-primary">
    <div class="fallback">
         <img src="{{ asset('img/logoNegativa.png') }}" alt="" width="200" height="" class="d-inline-block align-text-top">
        <h1>Ops!!</h1>
        <h3> A página solicitada não está disponível ou não existe</h3>
        <h4>Clique <a href="/"> <button type="button" class="btn btn-secondary btn-lg">AQUI</button> </a> para retornar à página inicial </h4>
        
    </div>

</body>

</html>
