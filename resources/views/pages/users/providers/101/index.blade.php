@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" />
<!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-header"><br>
                <h2 class="title">Bienvenido</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('affiliates.r101.store') }}" method="POST">
                    @csrf
                    <h2 class="title">Primero, vamos a definir cómo te conocerán los clientes</h2>
                    <div class="questions">Nombre de tu negocio:
                        <div class="p-b-15"></div>
                        <input type="Text" class="input_text_big" name="company_name"
                            placeholder="Ejm: Grupo musical Con Sabor" value="{{ old('company_name') }}">
                    </div>
                    <div class="questions">Breve descripción de tu empresa, los servicios que ofreces, etc.
                        <div class="p-b-15"></div>
                        <textarea name="description" style="input_text_big"></textarea>
                    </div>
                    <h2 class="title">Ahora, vamos a definir qué es lo que haces</h2>
                    <br>
                    <select class="select_register_medium" name="offer_type">
                        <option selected disabled>Selecciona...</option>
                        @foreach ($offers as $offer)
                        <option value='{{ $offer->id }}' {{ (old('product') == "product" ? "selected":"") }}>
                            {{ $offer->type }}</option>
                        @endforeach
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
                            <input id="event_type" type="checkbox" name="event_type[]" value="{{ $event->id }}">
                            <h6>
                                <option value="{{ $event->id }}">{{$event->type}} </option>
                            </h6>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="p-b-15"></div>
                    <div class="questions">¿En que categoría entra lo que ofreces?</div>
                    <select class="select_register_medium" name="article_type" id="articlesSelect" style="color:black">
                        <option selected disabled>Selecciona una...</option>
                        @foreach($articles as $article)
                        <option value="{{$ar = $article->id}}" {{ (old('ar') == $article->id ? "selected":"") }}>
                            {{$article->type}}
                        </option>
                        @endforeach
                    </select>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center p-t-30">}
                        <a href="{{ route('affiliates.r212.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit"
                                onclick="validate()">Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
