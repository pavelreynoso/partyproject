@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Definamos a tu paquete</h2>
                    <form method="POST">
                        <div class="questions">Escribe el nombre con el que quieres que se dé a conocer tu paquete 
                            <div class="p-b-15"></div>
                            <input type="Text" class="input_text_big" name="package_name" placeholder=""
                            minlength="5" maxlength="50">
                        </div>
                        <div class="questions">Describe todo lo que se incluye en tu paquete
                            <div class="p-b-15"></div>
                            <textarea name="package_description" style="input_text_big"></textarea
                                minlength="5" maxlength="200">
                            <div id="page">
                                <form id="messageForm">
                                    <h2>Describe todo lo que se incluye en tu paquete</h2>
                                    <textarea id="package_description" name="package_description" 
                                    style="input_text_big"></textarea
                                    minlength="5" maxlength="200">
                                    <div id="charactersRemaining">180 characters</div>
                                </form>
                            </div>
                                      


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
@endsection