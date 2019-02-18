@extends('layouts.app')

@section('content')
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
                                    <input id="last" type="text" placeholder="Apellidos" class="input-group form-control{{ $errors->has('last') ? ' is-invalid' : '' }}"
                                        name="last" value="{{ old('last') }}" required autofocus>

                                    @if ($errors->has('last'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="address" type="text" placeholder="Dirección" class="input-group form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                        name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="phone" type="text" placeholder="Teléfono" class="input-group form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                        name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                                    <input id="username" type="text" placeholder="Username" class="input-group form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                        name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="password" type="text" placeholder="Password" class="input-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
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
                                    <input id="confirm-password" type="text" placeholder="Confirmar Password" class="input-group form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-md-6">
                                    <input id="profile" type="text" placeholder="Perfil" class="input-group form-control{{ $errors->has('id_profile') ? ' is-invalid' : '' }}"
                                        name="id_profile" value="{{ old('id_profile') }}" required autofocus>

                                    @if ($errors->has('id_profile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_profile') }}</strong>
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
