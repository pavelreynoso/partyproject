@extends('layouts.register')
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                    <h2 class="title">Ahora define el precio por paquete</h2>
                <form method="POST">
                        <div class="questions">Define el precio base
                                <div class="p-b-15"></div>
                                <input type="text" class="input_text" name="Based_package_price" placeholder="$"> MXN
                        </div>
                            <div>
                                    <h6 class="explanations">NOTA: Después podrás modificar el precio de
                                        acorde al día y fecha </h6>
                            </div>
                            <div class="questions_group">¿Quieres ofrecer alguna oferta temporal?
                                    <div class="checkbox checkbox-primary">
                                            <input id="OfertaTemporal" type="checkbox" checked="">
                                            <label for="OfertaTemporal">
                                                <h5>Si</h5>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="OfertaTemporal" type="checkbox">
                                            <label for="OfertaTemporal">
                                                <h5>No</h5>
                                            </label>
                                        </div>
                                            <!--NOTA:CONDICIONAL, SOLO SE PUEDE ELEGIR, SI O NO!!!!!!

                                            SI SI:!!!-->
                                            <div class="questions_group">Define el precio de oferta:
                                                    <div class="p-b-15"></div>
                                                    <input type="text" class="input_text" name="Based_package_price" placeholder="$"> MXN
                                            </div>

                                             <div class="questions_group">Define el periodo de oferta:
                                                <div class="p-b-15"></div>
                                                
                                                <input id="Offer_from" type="date" min="01/01/2019" max="01-01-2022" name="Offer_from" 
                                                value="" required="required" class="input_text">
                                                
                                                    <span>hasta</span>
                                                

                                                <input id="Offer_to" type="date" min="11/04/2019" max="01-01-2022" name="Offer_to" 
                                                value="" required="required" class="input_text">   
                                                <div class="p-b-15">
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
