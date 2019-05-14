@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Calendario</h2>
                <form method="POST">
                    <div id="calendar"></div>

                    

                    </div>
                    <div class="p-b-15 center">
                        <a href="{{ route('202') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                        </a>
                        <a href="{{ route('204') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
  {!!Html::script('partyproject/resources/js/207.js')!!}
@stop
