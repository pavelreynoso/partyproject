@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">

                <h2 class="title">Stock</h2>
                <form action=" {{route('affiliates.r302.store')}} "method="POST">
                    @csrf
                    <div class="questions">How many items do you have of this product?
                        <div class="p-b-15"></div>
                        <input type="text" class="input_text" name="quantity" placeholder="#"> items.
                    </div>
                    <div class="questions_group">Can your item be delivered at a time before the event of your clients?
                        <div class="checkbox checkbox-primary">
                            <input id="Yes_specific_day_delivery" type="radio" name="specific_name">
                            <label for="Yes_specific_day_delivery" name="anticipation">
                                <h5>Yes</h5>
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input id="No_specific_day_delivery" type="radio" name="specific_name">
                            <label for="No_specific_day_delivery" name="anticipation">
                                <h5>No</h5>
                            </label>
                        </div>
                    </div>
                    <div class="questions_group">Minimum preparation time for the delivery of your product:
                        <div class="p-b-15"></div>
                        <div class="p-b-15">
                            <select id="deliveryanticipation" runat="server" class="select_register"
                                name="anticipation_time"></select></select>
                            <span>working days.</span>
                        </div>
                    </div>
                    <div class="questions_group">Define the minimum quantity of items clients can order
                        <div class="p-b-15"></div>
                        <input type="text" class="input_text" name="minimum" placeholder="# of items"> items
                    </div>

                    <div class="p-b-15 center">
                        <a href="{{ route('affiliates.r201.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                        </a>
                        <a href="{{ route('affiliates.r205.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit">Continue</button>
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
