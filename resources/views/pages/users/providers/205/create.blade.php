@extends('layouts.register')

@section('scripts')
<script type="text/javascript" src="{{asset('../js/205.js')}}"></script>
@endsection

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <form action=" {{route('affiliates.r205.store')}} " method="POST">
                    @csrf
                    <div class="title">Maintaining your response rate is an indispensable factor to be a successful affiliate and selling more
                        <div class="p-b-15 center"></div>
                        <div class="explanations"> Reservations will always have to be approved by you.
                        Customers will send a reservation or purchase request. You will have 24 hours to accept or decline.<br> <br> Remember that if you cancel, you will generate setbacks for customers.<br>
                        </div>
                        <div class="p-b-15"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="compliance1" type="checkbox">
                            <label for="compliance1">
                                <h5>I agree</h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <h2 class="title">According to the customizations you've made...</h2>
                        <div class="explanations">
                            You may offer your services starting today <!--TODO: Cambiar hoy-->
                            <!--TODO: fecha escogida en la pagina 206-->
                            <div class="p-b-15"></div>
                        </div>
                        <div class="explanations">
                            Customers who meet Feval requirements may send the reservation request for your service. You will have 24 hours to accept or decline the reservation. In case the client has a special request, you can also respond before accepting the reservation.
                            <div class="p-b-100"></div>
                            <div class="checkbox checkbox-primary">
                                <input id="compliance2" type="checkbox">
                                <label for="compliance2">
                                    <h5>I have read and fully accept Feval's Terms and Conditions.</h5>
                                </label>
                                <div class="p-b-15 center"></div>
                            </div>
                            <div class="p-b-15 center">
                                <a href="{{ route('affiliates.r302.create') }}">
                                    <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                                </a>
                                <a href=" #Terminar ">
                                    <button id="continue" class="btn2 btn--radius-2 btn-feval" type="submit" disabled>Register!</button>
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
