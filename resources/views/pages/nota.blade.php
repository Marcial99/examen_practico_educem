<x-app-layout>
    <div class="container mt-2">
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
        <div class="flex flex-col w-full ">

            <div class="bg-white p-5 shadow-xl  rounded-br-xl rounded-bl-xl mb-20 mt-0 z-10">

                <h1 class="text-jusify">{{ $nota->titulo }}</h1>
                <img src="{{ $nota->imagen }}" class="img-fluid rounded mx-auto d-block w-3/4 mt-5" alt="...">
                <div class="row justify-content-between mt-5">
                    <div class="col-sm-12 col-md-8">
                        <div class="flex flex-col">

                            <p class="text-gray-600">{{ $nota->user->name }}</p>
                            <p class="text-gray-600">{{ $nota->user->email }}</p>

                        </div>

                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="float-right">{{ $nota->fecha }}</div>
                    </div>
                </div>


                <div class="text-justify mt-5">
                    {{ $nota->contenido }}
                </div>

                <br>
                <hr> <br>
                <div>
                    <div class="row justify-content-between my-5">
                        <div class="col-sm-12 col-md-8">
                            <h4>Comentarios</h4>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <button class="btn btn-primary float-right" id="new-comment-btn">Crear
                                comentario</button>
                        </div>


                    </div>


                    <div id="new-comment" hidden class="mb-10">
                        <form action="{{ route('comentario.store') }}" method="POST">
                            <h5>Crear comentario</h5>
                            @csrf
                            <input type="text" hidden name="id_nota" value="{{ $nota->id }}">
                            <div class="form-group my-3">
                                <label for="comentario" class="form-label">Comentario:</label>
                                <textarea name="comentario" id="comentario" cols="30" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="my-3">
                                <input type="submit" class="btn btn-success float-right" value="Guardar">
                                <br>
                            </div>
                        </form>
                    </div>

                    @if (count($comentarios) > 0)
                        <div class="flex flex-col space-y-5">
                            @foreach ($comentarios as $comentario)
                                <div class=" bg-gray-200 rounded-md px-4 py-6">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-12 col-md-8">
                                            <h6>{{ $comentario->user->name }}</h6>
                                            <p class="text-sm font-extralight text-gray-600">
                                                {{ $comentario->user->tipo->nombre }}</p>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="float-right">{{ $comentario->fecha }}</div>
                                        </div>
                                    </div>
                                    <p>{{ $comentario->comentario }}</p>
                                    <button class="float-right btn responder btn-outline-primary"
                                        data-id='{{ $comentario->id }}'>Responder</button>
                                    <div class="mt-5 respuesta" hidden id="{{ $comentario->id }}">
                                        <form action="{{ route('respuesta.store') }}" method="POST">
                                            @csrf
                                            <h5>Tu respuesta</h5>
                                            <input type="text" name="id_comentario" hidden
                                                value="{{ $comentario->id }}">
                                            <div class="form-group my-3">
                                                <label for="respuesta" class="form-label">Respuesta:</label>
                                                <textarea name="respuesta" id="" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" class="btn btn-success float-right"
                                                    value="Guardar">
                                                <br>
                                            </div>
                                        </form>
                                    </div> <br> <br>
                                    @if (count($comentario->respuestas) > 0)
                                        <div class="flex flex-col space-y-3">
                                            <h6>Respuestas</h6>
                                            @foreach ($comentario->respuestas as $respuesta)
                                                <div class=" bg-gray-300 rounded-md px-4 py-6">
                                                    <div class="row justify-content-between">
                                                        <div class="col-sm-12 col-md-8">
                                                            <h6>{{ $respuesta->user->name }}</h6>
                                                            <p class="text-sm font-extralight text-gray-600">
                                                                {{ $comentario->user->tipo->nombre }}</p>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="float-right">{{ $respuesta->fecha }}</div>
                                                        </div>
                                                    </div>

                                                    <p>{{ $respuesta->respuesta }}</p>


                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                        </div>
                    @else
                        <div class="alert alert-primary" role="alert">
                            No hay comentarios. Se el primero en comentar.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    @section('page-js')
        <script>
            $(document).ready(function() {
                $('#new-comment-btn').on('click', function() {
                    $('#new-comment').attr('hidden', false);
                });

                $('.responder').on('click', function() {
                    $('#' + $(this).attr('data-id')).attr('hidden', false);
                });
            });
        </script>
    @endsection
</x-app-layout>
