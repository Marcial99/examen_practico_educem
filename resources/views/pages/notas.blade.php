<x-app-layout>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (auth()->user()->tipo->id == 1)
            <a href="{{ route('notas.create') }}" class="btn btn-primary float-right">
                Crear
            </a>
            <br> <br> <br>
        @endif
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 gy-3">
            @foreach ($notas as $nota)
                <div class="col">
                    <div
                        class=" bg-white rounded-2xl shadow-md px-4 py-6 transition transform hover:shadow-xl hover:-translate-y-4">
                        <img src="{{ $nota->imagen }}" class="card-img-top" alt="imagen">

                        <h5 class="card-title">{{ $nota->titulo }}</h5>
                        <span class="text-sm font-thin text-gray-500">{{ $nota->fecha }}</span>
                        <p class="card-text text-truncate">{{ substr($nota->contenido, 120) }}</p>
                        <a href="{{ route('notas.show', $nota->id) }}" class="btn btn-primary">Visualizar</a>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-20">
            {{ $notas->links() }}
        </div>

    </div>

</x-app-layout>
