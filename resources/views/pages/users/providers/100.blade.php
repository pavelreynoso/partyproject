@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" />
<!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-title">
                <h2 class="title">Bienvenido</h2>
            </div>
            <div class="card-body questions">
                Para poder formar parte del programa de afiliados de Feval, te tienes que registrar primero. Si continuas con el formulario, estás aceptando que utilizaremos tu información para crecer la red Feval.
                <br>Necesitas crear un usuario nuevo para poder afiliarte a Feval; creálo ahora.
                <div class="p-b-15 center p-t-30">
                    <a href="{{ route('register',[2]) }}">
                        <br>{{ __('Si no tienes usuario,')}}
                        <button class="btn2 btn--radius-2 btn-feval" type="button"
                            onclick="validate()">¡Regístrate ahora!</button>
                    </a>
                    <br>
                    <a href="{{ route('login') }}">
                        <br>{{ __('Si ya eres afiliado,')}}
                        <button class="btn2 btn--radius-2 btn-feval" type="button"
                            onclick="validate()">¡Inicia sesión!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
