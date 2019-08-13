@extends('layouts.register')

@section('content')
<script>
        var progress_percentage;
        progress_percentage='30%';
</script>

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">

                <form method="POST">
                    <div class="title">Mantener tu inventario actualizado es un factor indispensable para ser un
                        afiliado exitoso
                        <div class="p-b-15 center"></div>
                        <div class="explanations"> Los clientes comprarán tus productos de forma inmediata.
                            Para recibir pedidos únicamente con las piezas que puedes vender,
                            mantén tu inventario siempre actualizado. Las demoras en entregas y
                            cancelaciones son un contratiempo para los clientes.

                            <div class="p-b-15"></div>
                            Si cancelas un pedido porque la información de disponibilidad no era la correcta,
                            tendrás que pagar una penalización y aparecera que el producto no tiene disponibilidad
                            desaparecerá para evitar nuevos pedidos.
                        </div>
                        <div class="p-b-15"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="Agreeness_to_inventory" type="checkbox">
                            <label for="Agreeness_to_inventory">
                                <h5>Estoy de acuerdo, mantendré mi inventario actualizado </h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15 center">
                            <a href="{{ route('214') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            </a>
                            <a href="{{ route('302') }}">
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
