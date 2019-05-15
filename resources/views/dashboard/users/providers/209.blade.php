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
                        <div class="text-besides">
                            <div class="p-b-15">
                                <select id="minquantityhours" runat="server" class="select_register"
                                    name=min_hours></select>
                                <span>Horas mínimo</span>
                            </div>

                            <div class="p-b-15">
                                <select id="maxquantityhours" runat="server" class="select_register"
                                    name=max_hours></select></select>
                                <span>Horas máximo</span>
                            </div>
                            <div class="p-b-15"></div>
                        </div>

                    </div>
                    <div class="p-b-15 center">
                        <a href="{{ route('208') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                        </a>
                        <a href="{{ route('210') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
