@extends('layouts.register')
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Now, define the price of what you offer</h2>
                <form method="POST">
                    <div class="questions">Write the price of your article
                        <div class="p-b-15"></div>
                        $<input type="text" class="input_text" name="Based_package_price" >
                    </div>
                            <div class="p-b-15 center">
                                <a href="{{ route('202') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                                </a>
                                <a href="{{ route('302') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Continue</button>
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
