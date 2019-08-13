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
                                <div class="questions">Escribe el nombre con el que quieres que se dé a conocer lo que vendes
                                    <div class="p-b-15"></div>
                                    <input type="Text" id="package_name" class="input_text_big" name="Business_name" placeholder="">
                                    <span class="text-besides" id="charactersRemainingName">50</span>
                                    <span class="text-besides"> caracteres</span>
                                </div>
                            </form>
                        </div>
                        <div class="p-b-15"></div>
                        <div id="packageDescription">
                            <form id="messageForm">
                                <div class="questions">Describe todo lo que se incluye en lo que ofreces
                                    <div class="p-b-15"></div>
                                    <textarea id="package_description" name="package_description"
                                    style="input_text_big" minlength="5" maxlength="200"></textarea>
                                    <span class="text-besides" id="charactersRemainingDescription">200</span>
                                    <span class="text-besides"> caracteres</span>
                                </div>
                            </form>
                        </div>
                        <div class="p-b-15"></div>
                        <div class="p-b-15 center">
                            <a href="{{ route('201') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            </a>
                            <a href="{{ route('202') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
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
