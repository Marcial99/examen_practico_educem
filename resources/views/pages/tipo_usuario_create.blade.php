<x-app-layout>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="card rounded-xl shadow-md   mt-3">

            <div class="card-body">
                <h1 class="text-center">Crear tipo de usuario</h1>
                <form action="{{ route('tipo_usuario.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success float-right" value="Guardar">
                    </div>

                </form>
            </div>
        </div>

    </div>

</x-app-layout>
