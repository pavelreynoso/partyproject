@extends('layouts.register')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Choose some pictures and/or video</h2>
                <form method="POST">
                    <div class="questions">Add the cover photo that will appear to your customers when they make their
                        search:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <button class="btn_images_big" name="portrait" type="button"><img
                                    src="{{asset('assets/img/Agregar_foto_portada.png' )}}"></button>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Add a couple more photos so that your customers know better what you offer:
                        <div class="p-b-15"></div>
                        <div class="btn_images_line">
                            <button class="btn_images_small" name="add_first_picture" type="button" href=#><img
                                    src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></button>

                            <button class="btn_images_small" name="add_second_picture" type="button" href=#><img
                                    src="{{asset('assets/img/Agregar_otra_foto.png' )}}"></button>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">You can add a video to show your services in a more dynamic way:
                        <div class="p-b-15"></div>

                        <div class="btn_images_line">
                        <button class="btn_images_small" name="add_second_picture" type="button" href=#><img
                                src="{{asset('assets/img/Agregar_video.png' )}}"></button>
                        </div>
                        <!--cambiar diseño de Boton-->
                        <div class="checkbox checkbox-primary">
                            <input id="Compliance" type="checkbox">
                            <label for="Published_Youtube" class="text-besides">
                                <h5>
                                    I accept that this video will be published on our public Feval YouTube channel.
                                </h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                        </a>
                        <a href="{{ route('204') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Continue</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
