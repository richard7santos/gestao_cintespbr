<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gestão Cintesp.Br - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="bg-home">
        @include('site.layouts._partials.header')
        <div class="container">
            <div class="space-home"></div>
            <div class="row">
                {{-- Coluna esquerda --}}
                <div class="col-md-2">
                    <ul>
                        <a href="3">
                            <li>Gestão de Usuários</li>
                        </a>
                        <hr />
                        <a href="3">
                            <li>Prestação de contas FAU</li>
                        </a>
                        <hr />
                        <a href="3">
                            <li>Prestação de contas CNPq</li>
                        </a>
                        <hr />
                        <a href="3">
                            <li>Envio de Projetos</li>
                        </a>
                        <hr />
                    </ul>
                </div>
                {{-- Coluna centro --}}
                <div class="col-md-8 content-home">
                @yield('conteudo')
                </div>
                {{-- Coluna Direita --}}
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    @include('site.layouts._partials.footer')
</body>

</html>
