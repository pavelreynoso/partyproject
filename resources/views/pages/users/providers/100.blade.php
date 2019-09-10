@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" /> <!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Welcome</h2>


                    <div class="p-b-15 center p-t-30">
                        <a href="{{ route('101') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" onclick="validate()">Continue</button>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
