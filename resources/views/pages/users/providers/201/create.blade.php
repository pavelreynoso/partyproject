@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Definamos lo que ofreces</h2>
                <form action="pages.users.providers.201.store" method="POST">
                    @csrf
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

                    <div class="questions">¿En que categoría entra lo que ofreces?</div>
                    <select class="select_register_medium" name="articles" id="articlesSelect" style="color:black">

                    </select>

                    <div class="p-b-15"></div>
                    <div class="questions">Agrega la foto de portada que les aparecerá a tus clientes cuando hagan su búsqueda:
                        <div class="p-b-15"></div>
                        <div class="avatar-upload col-6">
                            <div class=" form-group avatar-edit">
                                <input type='file' id="portrait" name="portrait" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor lo que
                        ofreces:
                        <div class="p-b-15"></div>
                        <div class="avatar-upload col-6">
                            <div class=" form-group avatar-edit">
                                <input type='file' id="image" name="image[]" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Indica el precio del producto.
                        <div class="p-b-15"></div>
                        $<input type="text" class="input_text" name="Based_package_price"> MXN
                    </div>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('affiliates.r212.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit">Regresar</button>
                        </a>
                        <a href="{{ route('affiliates.r302.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit">Continuar</button>
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
