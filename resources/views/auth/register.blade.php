@extends('layouts.app')

@section('content')
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date_of_birth").setAttribute("max", today);
</script>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-4">
                    <div class="card-header">
                        <h2 class="title">{{__('Regístrate aquí')}}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="Nombre" class="input-group form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="last_names" type="text" placeholder="Apellidos" class="input-group form-control{{ $errors->has('last_names') ? ' is-invalid' : '' }}"
                                        name="last_names" value="{{ old('last_names') }}" required>

                                    @if ($errors->has('last_names'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_names') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="email" type="text" placeholder="E-mail" class="input-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" min="01/01/1900" max="31/12/2100" placeholder="Fecha de Nacimiento" class="input-group form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                        name="date_of_birth" value="{{ old('date_of_birth') }}" required>

                                    @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Contraseña" class="input-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="confirm-password" type="password" placeholder="Confirmar Contraseña"
                                        class="input-group form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="profile_id" type="text" placeholder="Perfil" class="input-group form-control{{ $errors->has('profile_id') ? ' is-invalid' : '' }}"
                                        name="profile_id" value="{{ old('profile_id') }}" required autofocus>

                                    @if ($errors->has('profile_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
