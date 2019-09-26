@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" />
<!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-header"><br>
                <h2 class="title">Welcome!</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('affiliates.r101.store') }}" method="POST">
                    @csrf
                    <h2 class="title">First, we will define how the customers will see you.</h2>
                    <div class="questions">Company name:
                        <div class="p-b-15"></div>
                        <input type="Text" class="input_text_big" name="company_name"
                            placeholder="Example: Feval Entreprise" value="{{ old('company_name') }}">
                    </div>
                    <div class="questions">Brief description of your company, the services you offer, etc.
                        <div class="p-b-15"></div>
                        <textarea name="description" style="input_text_big"></textarea>
                    </div>
                    <h2 class="title">Now, let's define what you do.</h2>
                    <br>
                    <div class="questions">To begin, choose what you offer.</div>
                    <select class="select_register_medium" name="offer_type">
                        <option selected disabled>Choose one:</option>
                        @foreach ($offers as $offer)
                        <option value='{{ $offer->id }}' {{ (old('product') == "product" ? "selected":"") }}>
                            {{ $offer->type }}</option>
                        @endforeach
                    </select>

                    <div>
                        <h6 class="explanations">
                            Note: If what you offer needs to have control over availability and specific delivery time
                            is defined as <strong>service</strong>. A <strong>product</strong>
                            only has availability and delivery time. For example, an hour of music is a
                            <strong>service </strong>; and a baloon bag for decoration is a
                            <strong>product</strong>.
                        </h6>
                    </div>

                    <div class="p-b-5"></div>

                    <div class="questions">Now, select the types of events you offer your products or services for.
                    </div>
                    <div class="questions">
                        @foreach ($events as $key=>$event)
                        <div class="checkbox checkbox-primary">
                            <input id="event_type" type="checkbox" name="event_type[]" value="{{ $event->id }}">
                            <label for="event_type">
                                <h6>
                                    <option value="{{ $key }}">{{$event->type}} </option>
                                </h6>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="p-b-15"></div>
                    <div class="questions">What type of articles do you offer?</div>
                    <select class="select_register_medium" name="article_type" id="articlesSelect" style="color:black">
                        <option selected disabled>Choose one...</option>
                        @foreach($articles as $article)
                        <option value="{{$ar = $article->id}}" {{ (old('ar') == $article->id ? "selected":"") }}>
                            {{$article->type}}
                        </option>
                        @endforeach
                    </select>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center p-t-30">}
                        <a href="{{ route('affiliates.r212.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit"
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
