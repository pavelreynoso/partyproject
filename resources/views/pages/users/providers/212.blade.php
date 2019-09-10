@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">  Indicate your information so that your customers can contact you</h2>
                <form method="POST">
                    <div class="questions">Phone number
                        <div class="p-b-15"></div>
                        <input type="tel" class="input_text" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                            required>

                        <div class="text-besides">10 digits format: (12) - 34567890</div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">E-Mail
                        <div class="p-b-15"></div>


                        <input id="email" type="email"
                            class="input_text{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required placeholder="mail@mail.com">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="p-b-100"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('211') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                        </a>
                        <a href="{{ route('213') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
