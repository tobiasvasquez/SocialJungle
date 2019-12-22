@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-8 mx-auto">
            <div class="card" style="margin-top: 7em">
                <div class="card-header bg-dark text-light font-weight-bolder">{{ __('Iniciar Sesion') }}</div>

                <div class="card-body rounded-bottom">
                    <form method="POST" action="{{ route('login') }}" class="offset-md-2">
                        @csrf

                        <div class="form-group row text-center">
                            <label for="email" class="col-md-3 col-form-label text-md-left font-weight-bold">{{ __('E-Mail') }}</label>

                            <div class="col-md-6 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="password"
                                class="col-md-3 col-form-label text-md-left font-weight-bold">{{ __('Password') }}</label>

                            <div class="col-md-6 ">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn bg-orange text-white font-weight-bolder">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link font-weight-bold" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
