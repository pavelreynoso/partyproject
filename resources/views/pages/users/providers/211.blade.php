@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Now, we will define how customers will know you</h2>
                <form method="POST">
                    <div class="questions">Your business name
                        <div class="p-b-15"></div>
                        <input type="Text" class="input_text_big" name="Business_name"
                            placeholder="Ejm: Grupo musical Con Sabor">
                    </div>
                    <div class="questions">Brief description of your company, the services you offer, etc.
                        <div class="p-b-15"></div>
                        <textarea name="short_description_service" style="input_text_big"></textarea>
                    </div>
                    <div class="p-b-15 center">
                        <a href="{{ route('205') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Back</button>
                        </a>
                        <a href="{{ route('212') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Continue</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
