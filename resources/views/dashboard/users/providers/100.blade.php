@extends('layouts.register')
@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Bienvenido</h2>
                <form method="POST">

                    <div class="questions">Para empezar, indica que ofreces.</div>
                    <div>
                        <h6 class="explanations">
                            Nota: Si lo que ofrece necesita tener un control sobre la disponibilidad en alguna fecha y tiempo específico se define como <strong> servicio</strong>. Un <strong>producto</strong> sólo tiene disponibilidad y tiempo de entrega. Por ejemplo, una hora de música es un <strong>servicio </strong>; y una bolsa de globos de decoración es un <strong>producto</strong>.
                        </h6>
                    </div>
                    <select name="services" id="servicesSelect" >
                        @foreach($articles as $article)
                            <option value="{{$article->id}}">{{$article->type}}</option>
                        @endforeach
                    </select>

                    <select name="events" id="servicesSelect" >
                        @foreach($events as $event)
                            <option value="{{$event->id}}">{{$event->type}}</option>
                        @endforeach
                    </select>
                    <div class="p-b-100"></div>
                    <div class="p-b-15 center">}
                    <a  href="{{ route('200') }}">
                        <button class="btn2 btn--radius-2 btn-feval" type="button"">Continuar</button>
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<@script>
$(document).ready(function(){
    $('#service').select2({
        placeholder:"Servicios"
    });
});
</@script>

@endsection
