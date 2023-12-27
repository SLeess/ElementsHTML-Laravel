<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a href="/" class="navbar-brand" id="navbar-img">
            <img src="/img/icon.png" alt="icone Header">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navbar-ul">
                {{--li.nav-item>a.nav-link--}}
                <li class="nav-item"><a href="/conteudo" class="nav-link">Visualizar Elementos</a></li>
                <li class="nav-item"><a href="/elementos" class="nav-link">Configurar Elementos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Outros Links</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                @guest
                <li class="nav-item"><a href="/login" class="nav-link">Entrar</a></li>
                <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                @endguest
                @auth
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class='nav-link' onclick="
                            event.preventDefault();
                            this.closest('form').submit();
                        ">Sair</a>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
