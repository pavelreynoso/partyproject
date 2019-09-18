@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Definamos lo que ofreces</h2>
                <form method="POST">
                    <div id="packageName">
                        <form id="messageForm">
                            <div class="questions">Escribe el nombre con el que quieres que se dé a conocer el producto
                                o servicio que vendes:
                                <div class="p-b-15"></div>
                                <input type="Text" id="package_name" class="input_text_big" name="Business_name"
                                    placeholder="">
                                <span class="text-besides" id="charactersRemainingName">50</span>
                                <span class="text-besides"> caracteres</span>
                            </div>
                        </form>
                    </div>
                    <div class="p-b-15"></div>
                    <div id="packageDescription">
                        <form id="messageForm">
                            <div class="questions">Describe todo lo que se incluye en lo que ofreces:
                                <div class="p-b-15"></div>
                                <textarea id="package_description" name="package_description" style="input_text_big"
                                    minlength="5" maxlength="200"></textarea>
                                <span class="text-besides" id="charactersRemainingDescription">200</span>
                                <span class="text-besides"> caracteres</span>
                            </div>
                        </form>
                    </div>
                    <div class="p-b-15"></div>
                    <div class="questions">Agrega la foto de portada que les aparecerá a tus clientes cuando hagan su
                        búsqueda:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <input class="btn_images_big" name="portrait" type="file"
                                src="{{asset('assets/img/Agregar_foto_portada.png' )}}"></input>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor lo que
                        ofreces:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <input class="btn_images_small" name="add_first_picture" type="file"
                                src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></input>

                            <input class="btn_images_small" name="add_second_picture" type="file"
                                src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></input>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Puedes agregar un vídeo para que muestres tus servicios de manera más
                        dinámica:
                        <div class="p-b-15"></div>

                        <div class="btn_images_line">
                            <input class="btn_images_small" name="add_second_picture" type="file"
                                src="{{asset('assets/img/Agregar_video.png' )}}"></input>
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
                    <div class="questions">Indica el precio del producto.
                        <div class="p-b-15"></div>
                        $<input type="text" class="input_text" name="Based_package_price"> MXN
                    </div>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('affiliates.101') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                        </a>
                        <a href="{{ route('affiliates.302') }}">
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
@section('scripts')
<script type="text/javascript" src="{{asset('../js/201.js')}}"></script>
@endsection
