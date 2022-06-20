<x-app-layout>
    <div class="container mt-5">
        <h1>Tipos de usuario</h1>
        <a href="{{ route('tipo_usuario.create') }}" class="btn btn-primary ">Añadir</a>
        <div class="card rounded-xl shadow-md   mt-3">

            <div class="card-body p-5">
                <table class="table table-hoverable">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos_usuarios as $tipo_usuario)
                            <tr>
                                <td>
                                    {{ $tipo_usuario->id }}
                                </td>
                                <td>
                                    {{ $tipo_usuario->nombre }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>

</x-app-layout>
