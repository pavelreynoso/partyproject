@extends('layouts.register')
@section('scripts')
    <script type="text/javascript" src="{{asset('../js/213.js')}}"></script>
@endsection
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Según todas las opciones de configuración elegidas</h2>
                <form method="POST">
                    <div class="explanations">
                        Puedes ofrecer tu servicio a partir del
                        <!--TODO: fecha escogida en la pagina 206-->
                        <div class="p-b-15"></div>
                    </div>
                    <div class="explanations">
                        Los clientes que cumplan los requisitos de Feval, podrán mandar la solicitud de reserva para tu servicio. Tendrás 24 horas para aceptar o rechazar la reservación. En caso de que el cliente tenga una petición especial, también podrás responder antes de aceptar la reserva.
                        <div class="p-b-100"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="compliance" type="checkbox">
                            <label for="compliance">
                                <h5>Acepto términos y condiciones de Feval</h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15 center">
                            <a href="{{ route('affiliates.212') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                            </a>
                            <a href=" #Terminar ">
                                <button id="end" class="btn2 btn--radius-2 btn-feval" type="button" disabled>Terminar </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
