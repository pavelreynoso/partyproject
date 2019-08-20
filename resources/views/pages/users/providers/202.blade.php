@extends('layouts.register')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Elige algunas fotos y vídeos</h2>
                <form method="POST">
                    <div class="questions">Agrega la foto de portada que les aparecerá a tus clientes cuando hagan su
                        búsqueda:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <button class="btn_images_big" name="portrait" type="button"><img
                                    src="{{asset('assets/img/Agregar_foto_portada.png' )}}"></button>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor lo que
                        ofreces:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <button class="btn_images_small" name="add_first_picture" type="button" href=#><img
                                    src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></button>

                            <button class="btn_images_small" name="add_second_picture" type="button" href=#><img
                                    src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></button>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Puedes agregar un vídeo para que muestres tus servicios de manera más
                        dinámica:
                        <div class="p-b-15"></div>

                        <div class="btn_images_line">
                        <button class="btn_images_small" name="add_second_picture" type="button" href=#><img
                                src="{{asset('assets/img/Agregar_video.png' )}}"></button>
                        </div>
                        <!--cambiar diseño de Boton-->
                        <div class="checkbox checkbox-primary">
                            <input id="Compliance" type="checkbox">
                            <label for="Published_Youtube" class="text-besides">
                                <h5>Acepto que este vídeo será publicado en nuestro canal público de Feval de Youtube.
                                </h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                        </a>
                        <a href="{{ route('204') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
