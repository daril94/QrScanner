@extends('theme.back.template')
@section('title', 'Iniciar Sesión')

@section('content')
    <div class="container col-12 col-md-8">
        <div class="card login-card" style="padding: 10px">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5 ">
                    <img src="{{ asset('img/login.jpg') }}" alt="login" class="img-fluid">
                </div>
                <div class="col-md-7">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <h3 style="color : red">{{ $error }}</h3>
                        @endforeach
                    @endif
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="card-body" >
                        <div class="brand-wrapper text-center">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo" width="150px">
                        </div>
                        <br> <br>
                        <p class="login-card-description text-center" style="font-size: 24px; font-weight: 700">Inicia
                            Sesión</p>
                        <div class="form-group" >
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group" >
                                    <label for="email" class="sr-only">Email</label>
                                    <input style="border: #dadada 1px solid;" type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address">
                                    @error('email')
                                        <span class="invalid-feedback is-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input style="border: #dadada 1px solid;" type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn btn-primary mb-4"
                                    style="font-size: 24px; font-weight: 700" type="submit" value="Login">
                            </form>
                        </div>

                        <nav class="login-card-footer-nav text-center" style="font-weight: 700">
                            <a href="#!" style="font-size: 16px; font-weight: 700">Terminos de Uso.</a>
                            <br>
                            <a href="#!" style="font-size: 16px; font-weight: 700">Politica y Privacidad</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @endsection
