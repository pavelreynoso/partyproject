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
                    <div class="questions_group">¿Ofreces un precio especial a partir de un número de horas?
                        <div class="checkbox checkbox-primary">
                            <input id="Yes_Special_hourly_price" type="checkbox">
                            <label for="Yes_Special_hourly_price">
                                <h5>Si</h5>
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input id="No_Special_hourly_price" type="checkbox">
                            <label for="No_Special_hourly_price">
                                <h5>No</h5>
                            </label>
                        </div>
                    </div>
                    <div class="questions_group">¿A partir de cuántas horas se ofrecerá el precio especial?
                        <div class="p-b-15"></div>
                        <div class="p-b-15">
                            <select id="minquantityhours" runat="server" class="select_register"
                                name=min_hours_special></select></select>
                            <span>horas</span>
                        </div>

                    </div>
                    <div class="questions_group">Define el precio especial
                        <div class="p-b-15"></div>
                        <input type="number" class="input_text" name="Based_hourly_price" placeholder="$"> MXN
                    </div>

                    <div class="p-b-15 center">
                        <a href="{{ route('209') }}">
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
@endsection
