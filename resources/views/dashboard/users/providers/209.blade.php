@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Opción por hora</h2>
                    <form method="POST">
                        <div class="questions">¿Por cuántas horas das tu servicio?
                                <div class="p-b-15"></div>
                                        <select id="quantityHours" runat="server" class="select_register" name=min_hours></select>
                                        <div class="p-t-5"></div>
                                            <h5> horas mínimo</h5>
                                <div class="p-b-15"></div>
                                        <select id="maxquantityHours" runat="server" class="select_register" name=max_hours></select></select>
                                        <div class="p-t-5"></div>
                                            <h5>horas máximo</h5>
                                <div class="p-b-15"></div>

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
