@extends('layouts.register')
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                    <h2 class="title">Precio por paquete</h2>
                <form method="POST">
                        <div class="questions">Define el precio base de tu paquete
                                <div class="p-b-15"></div>
                                <input type="text" class="input_text" name="Based_package_price" placeholder="$"> MXN
                        </div>
                            <div>
                                    <h6 class="explanations">NOTA: Después podrás modificar el precio de
                                        acorde al día y fecha </h6>
                            </div>
                            <div class="questions">¿Quieres ofrecer alguna oferta temporal?
                                    <div class="checkbox checkbox-primary">
                                            <input id="OfertaTemporal" type="checkbox" checked="">
                                            <label for="OfertaTemporal">
                                                Si
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="OfertaTemporal" type="checkbox">
                                            <label for="OfertaTemporal">
                                                No
                                            </label>
                                        </div>
                                            NOTA:CONDICIONAL, SOLO SE PUEDE ELEGIR, SI O NO!!!!!!

                                            SI SI:!!!
                                            <div class="questions">Define el precio de oferta:
                                                    <div class="p-b-15"></div>
                                                    <input type="text" class="input_text" name="Based_package_price" placeholder="$"> MXN
                                            </div>

                                             <div class="questions">Define el periodo de oferta:
                                                <div class="p-b-15"></div>
                                            <div class="form-group" id="data_5">==$0
                                                <label class="font-normal">Range select</label>
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="form-control-sm form control" name="start" value="05/05/2014">
                                                    <span class="input-group-addon">hasta</span>
                                                    <input type="text" class="form-control-sm form control" name="start" value="05/06/2014">

                                                </div>
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
