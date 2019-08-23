@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">

                <h2 class="title">Inventario</h2>
                <form method="POST">
                    <div class="questions">¿Cuántos artículos tienes disponibles?
                        <div class="p-b-15"></div>
                        <input type="text" class="input_text" name="available_pieces" placeholder="#"> artículos
                    </div>
                    <div class="questions_group">¿Tu artículo se puede entregar en una fecha específica?
                        <div class="checkbox checkbox-primary">
                            <input id="Yes_specific_day_delivery" type="checkbox">
                            <label for="Yes_specific_day_delivery">
                                <h5>Si</h5>
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input id="No_specific_day_delivery" type="checkbox">
                            <label for="No_specific_day_delivery">
                                <h5>No</h5>
                            </label>
                        </div>
                    </div>
                    <div class="questions_group">Tiempo de anticipación para entregar un artículo
                        <div class="p-b-15"></div>
                        <div class="p-b-15">
                            <select id="deliveryanticipation" runat="server" class="select_register"
                                name=min_hours_offer></select></select>
                            <span>días hábiles</span>
                        </div>

                    </div>
                    <div class="questions_group">Define el mínimo numero de artículos por pedido
                        <div class="p-b-15"></div>
                        <input type="text" class="input_text" name="minimum_article_order" placeholder="# of articles"> artículos
                    </div>

                    <div class="p-b-15 center">
                        <a href="{{ route('301') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                        </a>
                        <a href="">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Terminar</button>
                        </a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('../js/302.js')}}"></script>
@endsection
