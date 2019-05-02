@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Tiempo de preparación</h2>
                <form method="POST">
                    <div class="questions">¿Cuánto tiempo necesitas para tener todo preparado para dar tu servicio?
                        <div class="p-b-15 center"></div>

                        <select class="select_register" name="Preparation_time">
                            <option value="1 day">
                                <h6>1 día</h6>
                            </option>
                            <option value="3_days">3 dias</option>
                            <option value="1_week">1 semana</option>
                            <option value="2_weeks">2 semanas</option>
                            <option value="1_month">1 mes</option>
                            <option value="3_months">3 meses</option>
                        </select>
                        <div class="p-b-15 center"></div>

                        <div class="explanations"> Tip: Si estableces que las reservas deben realizarse
                            con al menos 1 mes de antelación, tendrás más tiempo de preparación,
                            pero perderás la oportunidad de aceptar reservaciones de última hora.
                        </div>
                        <div class="p-b-15 center">
                        </div>
                        <div class="p-b-15 center">
                            <a href="{{ route('205') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            </a>
                            <a href="{{ route('207') }}">
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
