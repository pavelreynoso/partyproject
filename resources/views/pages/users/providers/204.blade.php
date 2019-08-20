@extends('layouts.register')
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Ahora define el precio de lo que ofreces</h2>
                <form method="POST">
                    <div class="questions">Indica el precio final del producto.
                        <div class="p-b-15"></div>
                        $<input type="text" class="input_text" name="Based_package_price" > MXN
                    </div>
                            <div class="p-b-15 center">
                                <a href="{{ route('203') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                                </a>
                                <a href="{{ route('205') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Continuar</button>
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
