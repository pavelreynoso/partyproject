@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" />
<!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Welcome</h2>
                <form method="POST">
                    <div class="questions">To begin, choose what you offer.</div>
                    <select class="select_register_medium" name="article type">
                        <option selected disabled>Select...</option>
                        <option value="product">Product</option>
                        <option value="service">Service</option>
                        <option value="both">Both</option>
                    </select>

                    <div>
                        <h6 class="explanations">
                            Note: If what you offer needs to have control over availability and specific delivery time is defined as <strong>service</strong>. A <strong>product</strong>
                            only has availability and delivery time. For example, an hour of music is a
                            <strong>service </strong>; and a baloon bag for decoration is a
                            <strong>product</strong>.
                        </h6>
                    </div>

                    <div class="p-b-5"></div>

                    <div class="questions">Now, select for what types of events you offer your products / services for
                    </div>
                    <div class="questions">
                        @foreach ($events as $event)
                        <div class="checkbox checkbox-primary">
                            <input id="event" type="checkbox">
                            <label for="event">
                                <h6>
                                    <option value="{{ $event->id }}">{{$event->type}} </option>
                                </h6>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="p-b-15"></div>
                    <div class="questions">In which cathegory falls what you offer?</div>
                    <select class="select_register_medium" name="articles" id="articlesSelect" style="color:black">
                        <option selected disabled>Select one...</option>
                        @foreach($articles as $article)
                            <option value="{{$article->id}}">{{$article->type}}</option>
                        @endforeach
                    </select>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center p-t-30">}
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button"
                                onclick="validate()">Continue</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
