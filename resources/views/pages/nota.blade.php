<x-app-layout>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="bg-white p-5 shadow-md rounded-lg">

            <img src="{{ $nota->imagen }}" class="img-fluid rounded mx-auto d-block w-1/2" alt="...">

            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-8">
                    <h1>{{ $nota->titulo }}</h1>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="float-right">{{ $nota->fecha }}</div>
                </div>
            </div>


            <div class="text-justify">
                {{ $nota->contenido }}
            </div>
        </div>
    </div>

</x-app-layout>
