@extends('layouts.master')
<title> Configuracion </title>
@section('contenido')
<h1 class="text-center">Configuracion</h1>
<form method="POST" action="{{ route ('config.update') }}" class="container-fluid" enctype="multipart/formdata">
    @csrf
    <div class="col-12 mt-5 rounded">
        <div class="row bg-white pb-5" style="padding-left:10em">
            <div class="mt-3 col-5">
                <label for="name" class="">{{ __('Nombre') }}</label>

                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-3 col-5 ">
                <label for="apellido" class="">{{ __('Apellido') }}</label>
                <div>
                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror"
                        name="apellido" value="{{ Auth::user()->apellido }}" required autocomplete="apellido" autofocus
                        placeholder="Apellido">

                    @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mt-3 col-5 ">
                <label for="username" class="">{{ __('Nombre de Usuario') }}</label>

                <div class="">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ Auth::user()->username }}" required autocomplete="username" autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <!-- <div class="mt-3 col-5 ">
                <label for="name" class="">{{ __('Confirmar Nombre de Usuario') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ Auth::user()->username }}" required autocomplete="name" autofocus placeholder="Confirmar Nombre de Usuario">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> -->


            <div class="mt-3 col-5 ">
                <label for="email" class="">{{ __('E-Mail') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ Auth::user()->email }}" required autocomplete="email"
                        placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <!-- <div class="mt-3 col-5 ">
                <label for="email" class="">{{ __('Confirmar Email') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Confirmar Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> -->

            <!-- <div class="mt-3 col-5 ">
                <label for="password" class="">{{ __('Contraseña') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Contraseña">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-3 col-5 ">
                <label for="password-confirm" class="">{{ __('Repetir Contraseña') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Confirmar contraseña">
                </div>
            </div> -->
            

            <div class="mt-5 col-10 text-center mb-5">
                <div class="">
                    <button type="submit" class="btn btn-dark">
                        {{ __('Guardar Cambios') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
