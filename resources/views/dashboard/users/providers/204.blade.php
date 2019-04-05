@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                    <h2 class="title">Precio por paquete</h2>
                <form method="POST">
                        <div class="questions">Define el precio base de tu paquete

                            </div>
                            <div>
                                    <h6 class="explanations">después podrás modificar el precio de acorde al día y fecha </h6>
                                </div>

                        <div class="p-b-100">

                            <input type="text" class="input_text" name="Based_package_price" placeholder="Precio">



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
