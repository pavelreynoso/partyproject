@extends('layouts.register')

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
                            clientes
                            mandarán una requisición de reserva o compra.
                            Tendrás 24 horas para aceptar o rechazar.
                            Recuerda que si cancelas, generarás contratiempos para los clientes.
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
                            <a href="{{ route('205') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            </a>
                            <a href="{{ route('211') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
