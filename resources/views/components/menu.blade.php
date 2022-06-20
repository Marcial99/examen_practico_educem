<div>
    <nav class="navbar navbar-expand-lg bg-white shadow-md">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::currentRouteName('note.*')) active @endif"
                            href="{{ route('notas.index') }}">Notas</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item"><span class="nav-link">{{ auth()->user()->name }}</span></li>
                        <li class="nav-item">
                            <form role="logout" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="nav-link" value="Cerrar sesión">
                            </form>
                        </li>
                    </ul>


                </div>

            </div>


        </div>
    </nav>
</div>
