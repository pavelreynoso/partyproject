@extends('layouts.register')
@section('scripts')
    <script type="text/javascript" src="{{asset('../js/213.js')}}"></script>
@endsection
@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">According to all the configuration options chosen</h2>
                <form method="POST">
                    <div class="explanations">
                        You can offer your service from:
                        <!--TODO: fecha escogida en la pagina 206-->
                        <div class="p-b-15"></div>
                    </div>
                    <div class="explanations">
                        Customers who meet Feval requirements may send the reservation request for your service. You will have 24 hours to accept or decline the reservation. In case the client has a special request, you can also respond before accepting the reservation.
                        <div class="p-b-100"></div>
                        <div class="checkbox checkbox-primary">
                            <input id="compliance" type="checkbox">
                            <label for="compliance">
                                <h5>I accept Feval terms and conditions</h5>
                            </label>
                            <div class="p-b-15 center"></div>
                        </div>
                        <div class="p-b-15 center">
                            <a href="{{ route('212') }}">
                                <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                            </a>
                            <a href=" #Terminar ">
                                <button id="end" class="btn2 btn--radius-2 btn-feval" type="button" disabled>Finish </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
