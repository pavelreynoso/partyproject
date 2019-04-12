@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">

                    <form method="POST">
                        <div class="title">Mantener tu calendario actualizado es un factor indispensable para ser un afiliado exitoso
                                <div class="p-b-15 center"></div>
                                    <div class="explanations"> Las reservaciones siempre tendrán que ser aprovadas por ti. Los clientes
                                    mandarán una requisición de reserva en los días que aparezcan como disponibles en tu calendario.
                                    Tendrás 24 horas para aceptar o rechazar.
                                    Mantén el calendario y la configuración de disponibilidad siempre actualizados para recibir reservas
                                    únicamente en los días en que puedas ofrecer tu servicio.
                                    Recuerda que si cancelas, generarás contratiempos para los clientes.
                                    <div class="p-b-15"></div>
                                    Si cancelas una reserva porque la disponibilidad de tu calendario no era correcta,
                                    tendrás que pagar una penalización y las fechas se pondrán como no disponibles automaticamente para
                                    evitar alguna otra reservación no deseada.
                                    </div>
                                    <div class="p-b-15"></div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="Agreeness" type="checkbox">
                                        <label for="Agreeness">
                                            <h5>Estoy de acuerdo </h5>
                                        </label>
                                    <div class="p-b-15 center"></div>
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
