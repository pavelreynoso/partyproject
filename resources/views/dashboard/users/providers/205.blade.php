@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Importancia del calendario</h2>
                    <form method="POST">
                        <div class="questions">Un calendario actualizado es la clave para ser un afiliado exitoso
                                <div class="p-b-15 center"></div>
                                    <div class="explanations"> Los clientes reservaran los días disponibles de forma inmediata.
                                    Para recibir reservas únicamente en los días en que puedas ofrecer tu servicio,
                                    mantén en calendario y la configuración de disponibilidad siempre actualizados.
                                    Las cancelaciones son un contratiempo para los clientes.
                                    Si cancelas una reserva porque la disponibilidad de tu calendario no era correcta,
                                    tendrás que pagar una penalización y las fechas aparecerán como no disponibles para
                                    evitar nuevas reservas
                                    </div>
                                    <div class="p-b-15 center"></div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="Agreeness" type="checkbox">
                                        <label for="Agreeness">
                                            Estoy de acuerdo
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
