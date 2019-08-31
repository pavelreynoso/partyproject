@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
        <div class="controlPanel center">
                <h2 class="title">Panel de Control</h2>
                <div class="leftCard">
                <h6 class="title2">Tus artículos</h6>
                    <div class="table center">
                    <table style="width:100%">
                            <tr>
                            <th>Artículo</th>
                            <th>Precio</th>
                            <th>Disponibilidad</th>
                            <th><!--erase space--></th>
                            </tr>
                            <td><button class="btn2 btn--radius-2 btn-article" style="width:100%" type="button">Globos<!--article name--></button></td>
                            <td><!--Price--></td>
                            <td><!--availability--></td>
                            <td><!--erase button--></td>
                        </table>
                    </div>
                </div>
                <div class="rightCard">
                        <h6 class="title2">Pedidos y Reservas</h6>
                            <div class="table center">
                                    <table style="width:100%">
                                            <tr>
                                            <th>Fecha</th>
                                            <th>Artículo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th><!--erase space--></th>
                                            </tr>
                                            <td><button class="btn2 btn--radius-2 btn-article" style="width:100%" type="button"><!--article name and onclick, go to edit article--></button></td>
                                            <td><!--Price--></td>
                                            <td><!--availability--></td>
                                            <td><!--erase button--></td>
                                        </table>
                            </div>
                </div>
                <div class="leftCard">
                        <h6 class="title2">Tus datos</h6>
                        <!--supplier info-->
                </div>
                <div class="rightCard">
                        <h6 class="title2">Progreso</h6>
                        <h6>Numero de pedidos en el mes</h6>
                        <h6>Ingresos del mes</h6>
                        <h6>Visitas a paginas de articulos</h6>
                        <h6>Evaluación</h6>

                        <!---->

                </div>
        </div>

        </div>

</div>

@endsection
