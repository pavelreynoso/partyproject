@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Indica los datos para que tus clientes te puedan contactar</h2>
                <form action="{{ route('affiliates.r212.store') }}" method="POST">
                    @csrf
                    <div class="questions">Teléfono
                        <div class="p-b-15"></div>
                        <input type="tel" class="input_text" id="phone" name="phone" required>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="text-besides">Formato de 10 digitos: (12) - 34567890</div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">E-Mail
                        <div class="p-b-15"></div>
                        <input id="contact_email" type="contact_email"
                            class="input_text{{ $errors->has('contact_email') ? ' is-invalid' : '' }}"
                            name="contact_email" value="{{ old('contact_email') }}" required
                            placeholder="mail@mail.com">

                        @if ($errors->has('contact_email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    {{$user = Auth::user()}}
                    {!! Form::hidden('provider_id', $user->id) !!}
                    <div class="p-b-100"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('affiliates.r101.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Regresar</button>
                        </a>
                        <a href="{{ route('affiliates.r201.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button">Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
