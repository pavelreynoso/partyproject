@extends('layouts.register')

@section('scripts')
    <script type="text/javascript" src="{{asset('../js/205.js')}}"></script>
@endsection

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">

                <form method="POST">
                    <div class="title">Maintaining your response rate is an indispensable factor to be a
                        successful affiliate and sell more
                        <div class="p-b-15 center"></div>
                        <div class="explanations"> Reservations will always have to be approved by you.
                        Customers will send a reservation or purchase request. You will have 24 hours to accept or decline.<br> <br> Remember that if you cancel, you will generate setbacks for customers.<br>
                        </div>
                        <div class="p-b-15"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="compliance" type="checkbox">
                            <label for="compliance">
                                <h5>I agree</h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15 center">
                            <a href="{{ route('302') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                            </a>
                            <a href="{{ route('211') }}">
                                <button id="continue" class="btn2 btn--radius-2 btn-feval" type="button" disabled>Continue</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
