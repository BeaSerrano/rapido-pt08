<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Rapido.es</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donde estamos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ejemplo</a></li>
                        <li><a class="dropdown-item" href="#">Ejemplo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Ejemplo</a></li>
                    </ul>
                </li>

                @guest
                @if (Route::has('login'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('login')}}"><span>Entrar</span></a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}"><span>Registrar</span></a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <form id="logoutForm" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                    <a id="logoutBtn" class="nav-link" href="#">Salir</a>
                </li>
                @endguest
                
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('ads.create') }}">
                    Nuevo anuncio
                  </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
