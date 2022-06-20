<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu @if (Route::current('user.*') || Route::current('tipo_usuario.*')) active @endif"
                            aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Usuarios</a></li>
                            <li><a class="dropdown-item" href="{{ route('tipo_usuario.index') }}">Tipos de usuario</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::currentRouteName('note.*')) active @endif"
                            href="{{ route('notas.index') }}">Notas</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
