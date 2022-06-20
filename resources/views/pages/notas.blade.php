<x-app-layout>
    <div class="container mt-5">
        <a href="{{ route('notas.create') }}" class="btn btn-primary float-right">
            Crear
        </a>
        <br> <br>
        <div class="row row-cols-3 space-y-10">
            @foreach ($notas as $nota)
                <div class="col">
                    <div
                        class=" bg-white rounded-2xl shadow-md px-4 py-6 transition transform hover:shadow-xl hover:-translate-y-4">
                        <img src="{{ $nota->imagen }}" class="card-img-top" alt="imagen">

                        <h5 class="card-title">{{ $nota->titulo }}</h5>
                        <p class="card-text text-truncate">{{ substr($nota->contenido, 120) }}</p>
                        <a href="{{ route('notas.show', $nota->id) }}" class="btn btn-primary">Visualizar</a>

                    </div>
                </div>
            @endforeach


        </div>

    </div>

</x-app-layout>
