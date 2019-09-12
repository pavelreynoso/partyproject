@extends('layouts.register')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Elige algunas fotos y vídeos</h2>
                <!-- form action=" { route('image.store') }}" method="POST" enctype="multipart/form-data"-->
                <form method="POST" enctype="multipart/form-data">
                    <div class="questions">Agrega la foto de portada que les aparecerá a tus clientes cuando hagan su
                        búsqueda:
                        <div class="p-b-15"></div>
                            <label for="portrait" class="btn2 btn--radius-2 btn-feval">Select Image</label>
                            <input id="portrait" style="visibility:hidden;" name="portrait" type="file" accept="image/*" onchange="loadFile(event)" >
                            <div class="imageposition"><img id="output" style="max-width: 200px; max-height: 150px; border: none;"/>
                            </div>
                                <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor lo que
                        ofreces:
                        <div class="p-b-15"></div>
                        <label for="first-picture" class="btn2 btn--radius-2 btn-feval float=left">Select Image</label>
                        <input id="first-picture" style="visibility:hidden;" name="add-first-picture" type="file" accept="image/*" onchange="loadFile(event)" >
                        <div class="imageposition"><img id="output" style="max-width: 200px; max-height: 150px; border: none;"/>
                        </div>
                            <div class="p-b-15"></div>
                            <label for="second-picture" class="btn2 btn--radius-2 btn-feval float=left">Select Image</label>
                            <input id="second-picture" style="visibility:hidden;" name="add-second-picture" type="file" accept="image/*" onchange="loadFile(event)" >

                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Puedes agregar un vídeo para que muestres tus servicios de manera más
                        dinámica:
                        <div class="p-b-15"></div>

                        <label for="video" class="btn2 btn--radius-2 btn-feval float=left">Select Video</label>
                        <input id="video" style="visibility:hidden;" name="addVideo" type="file" accept="image/*" onchange="loadFile(event)" >
                        <div class="imageposition"><img id="video" style="max-width: 200px; max-height: 150px; border: none;"/>
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
@section('scripts')
    <script type="text/javascript" src="{{asset('../js/202.js')}}"></script>
@endsection
