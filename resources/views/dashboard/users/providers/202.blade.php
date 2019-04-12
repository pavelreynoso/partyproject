@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Elige algunas fotos y video</h2>
                    <form method="POST">
                            <div class="questions">Agrega la foto de portada que les aparecerá a tus clientes cuando hagan su búsqueda: 
                                    <!--cambiar diseño de Boton-->
                                    <div class="p-b-15"></div>
                                    <button class="btn2 btn--radius-2" type="button" href=#><img src="{{asset('assets/img/Agregar_foto_portada.png')}}"></button>
                                <div class="p-b-15"></div>
                            </div>
                            <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor tu servicio
                                    <div class="p-b-15"></div>    
                                    <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Agregar otra foto</button>
                                    <!--cambiar diseño de Boton-->
                                    <div class="p-b-15"></div>
                            </div>
                            <div class="questions">Agrega un par de fotos más para que tus clientes conozcan mejor tu servicio
                                    <div class="p-b-15"></div>             
                                    <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Agregar video</button>
                                    <!--cambiar diseño de Boton-->
                                    <div class="checkbox checkbox-primary">
                                            <input id="Agreeness" type="checkbox">
                                            <label for="Published_Youtube" class="text-besides">
                                                <h5>Acepto que este video será publicado en nuestro canal publico de Feval de Youtube </h5>
                                            </label>
                                        <div class="p-b-15 center"></div>
                                    </div>
                                    <div class="p-b-15"></div>
                            </div>
                            
                        <div class="p-b-15"></div>
                        <div class="p-b-15 center">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection