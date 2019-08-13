@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="0" /> <!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Bienvenido</h2>
                <form method="POST">
                    <div class="questions">Para empezar, indica que ofreces.</div>
                    <select class="select_register_medium" name="article type">
                        <option selected disabled>Selecciona...</option>
                        <option value="product">Producto</option>
                        <option value="service">Servicio</option>
                        <option value="both">Ambos</option>
                    </select>

                    <div>
                        <h6 class="explanations">
                            Nota: Si lo que ofrece necesita tener un control sobre la disponibilidad en alguna fecha y
                            tiempo específico se define como <strong> servicio</strong>. Un <strong>producto</strong>
                            sólo tiene disponibilidad y tiempo de entrega. Por ejemplo, una hora de música es un
                            <strong>servicio </strong>; y una bolsa de globos de decoración es un
                            <strong>producto</strong>.
                        </h6>
                    </div>

                    <div class="p-b-5"></div>

                    <div class="questions">Ahora, selecciona para que tipos de eventos ofreces tus productos/servicios
                    </div>
                    <div class="questions">
                        @foreach ($events as $event)
                            <div class="checkbox checkbox-primary">
                                <input id="event" type="checkbox">
                                <label for="event">
                                <h6><option value="{{ $event->id }}">{{$event->type}} </option></h6>
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-b-15"></div>
                    <div class="questions">¿En que categoría entra lo que ofreces?</div>
                    <select class="select_register_medium" name="articles" id="articlesSelect" style="color:black">
                        @foreach($articles as $article)
                        <option value="{{$article->id}}">{{$article->type}}</option>
                        @endforeach
                    </select>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center, p-t-30">}
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" onclick="validate()">Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<@script>
$(document).ready(function(){
    $('#articles').select2({
        placeholder:" Artículos"
    });
});
</@script>
@endsection
@section('scripts')

    <script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
