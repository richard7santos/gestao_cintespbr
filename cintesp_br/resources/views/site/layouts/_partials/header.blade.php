<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="" width="" height="30" class="d-inline-block align-text-top">
            <b>Gestão Cintesp.br</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route( 'projetos.list' ) }}">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route( 'bolsistas.list' ) }}">Bolsistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route('compras.list')}}">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route('entregas.list')}}">Entregas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route( 'usuarios.list' ) }}">Usuários</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
