@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Datos generales</h2>
                    <form method="POST">
                            <div class="explanations"><h5>Ahora vamos a definir cómo te conocerán los clientes</h5></div>


                        <div class="questions">Nombre de tu negocio
                            <div class="p-b-15"></div>
                                <input type="Text" class="input_text_medium" name="Business_name" placeholder="Ejm: Grupo musical Con Sabor">
                        </div>
                        <div class="questions">Breve descripción de lo que ofreces, número de integrantes, etc.
                                <div class="p-b-15"></div>
                                <textarea name="short_description_service" style="input_text"></textarea>
                            </div>


                                    </div>
                                    <div class="p-b-15 center">
                                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
