@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Precio por hora</h2>
                    <form method="POST">
                        <div class="questions">Define el precio por hora de tu servicio
                            <div class="p-b-15"></div>
                                        <input type="number" class="input_text" name="Based_hourly_price" placeholder="$"> MXN
                        </div>
                        <div class="questions">¿Ofreces un precio especial a partir de un número de horas?
                            <div class="checkbox checkbox-primary">
                                        <input id="Yes_Special_hourly_price" type="checkbox">
                                        <label for="Yes_Special_hourly_price">
                                            Si
                                        </label>
                            </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="No_Special_hourly_price" type="checkbox">
                                        <label for="No_Special_hourly_price">
                                            No
                                        </label>
                                    </div>
                        </div>


                        <div class="questions">¿A partir de cuántas horas se ofrecerá el precio especial?
                                <div class="p-b-15"></div>
                                        <select id="quantityHours" runat="server" class="select_register" name=min_hours_special></select></select>
                                        <div class="p-t-5"></div>
                                            <h5>horas</h5>
                                <div class="p-b-15"></div>
                        </div>
                        <div class="questions">Define el precio especial
                                <div class="p-b-15"></div>
                                            <input type="number" class="input_text" name="Based_hourly_price" placeholder="$"> MXN
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
