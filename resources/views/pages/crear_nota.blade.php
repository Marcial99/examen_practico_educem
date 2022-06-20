<x-app-layout>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="bg-white p-5 shadow-md rounded-lg">
            <h1 class="text-center">Crear nota</h1>
            <form action="{{ route('notas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen externa</label>
                    <input type="text" class="form-control" id="imagen" placeholder="Imagen" name="imagen">
                </div>
                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido</label>
                    <textarea name="contenido" id="contenido" cols="50" rows="15" placeholder="Contenido" class="form-control"></textarea>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success float-right">

            </form>
        </div>
    </div>

</x-app-layout>
