@extends('layouts.register')

@section('scripts')
<script type="text/javascript" src="{{asset('../js/205.js')}}"></script>
@endsection

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <form method="POST">
                    <div class="title">Mantener tu índice de respuesta es un factor indispensable para ser un
                        afiliado exitoso y vender más
                        <div class="p-b-15 center"></div>
                        <div class="explanations"> Las reservaciones siempre tendrán que ser aprobadas por ti. Los
                            clientes mandarán una requisición de reserva o compra. Tendrás 24 horas para aceptar o
                            rechazar.<br> <br> Recuerda que si cancelas, generarás contratiempos para los clientes.
                        </div>
                        <div class="p-b-15"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="compliance1" type="checkbox">
                            <label for="compliance1">
                                <h5>Estoy de acuerdo</h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <h2 class="title">Según todas las opciones de configuración elegidas</h2>
                        <div class="explanations">
                            Puedes ofrecer tu servicio a partir de hoy <!--TODO: Cambiar hoy-->
                            <!--TODO: fecha escogida en la pagina 206-->
                            <div class="p-b-15"></div>
                        </div>
                        <div class="explanations">
                            Los clientes que cumplan los requisitos de Feval, podrán mandar la solicitud de reserva para
                            tu servicio. Tendrás 24 horas para aceptar o rechazar la reservación. En caso de que el
                            cliente tenga una petición especial, también podrás responder antes de aceptar la reserva.
                            <div class="p-b-100"></div>
                            <div class="checkbox checkbox-primary">
                                <input id="compliance2" type="checkbox">
                                <label for="compliance2">
                                    <h5>Acepto términos y condiciones de Feval</h5>
                                </label>
                                <div class="p-b-15 center"></div>
                            </div>
                            <div class="p-b-15 center">
                                <a href="{{ route('affiliates.r302.create') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                                </a>
                                <a href=" #Terminar ">
                                    <button id="continue" class="btn2 btn--radius-2 btn-feval" type="submit" disabled>Terminar </button>
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
