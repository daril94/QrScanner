@extends('theme.back.app')

@section('contenido')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{ asset('img/login.jpg') }}" alt="login" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper text-center">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo" width="150px">
                        </div>
                        <p class="login-card-description text-center">Registra una nueva cuenta</p>
                        <form method="POST" action="{{ route('admin.guardar') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="sr-only">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required placeholder="Nombres">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="usuario" class="sr-only requerido">Usuario</label>
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror"
                                    name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario"
                                    placeholder="Usuario">
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="area" class="sr-only">Área</label>
                                <input id="area" type="text" class="form-control @error('area') is-invalid @enderror"
                                    name="area" value="{{ old('area') }}" required autocomplete="area"
                                    placeholder="Área de Trabajo">
                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <select name="idHerramienta" class="form-control">
                                    <option value="">---Elegir Rol---</option>
                                    <option value="control">Control</option>
                                    <option value="observador">Observador</option>
                                    <option value="bodega">Bodega</option>
                                    <option value="monitor">Monitor</option>


                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password">
                            </div>
                            <input name="register" id="register" class="btn btn-block login-btn btn-primary mb-4"
                                type="submit" value="Registrar">
                        </form>
                        <nav class="login-card-footer-nav text-center" style="font-weight: 700">
                                                      <a href="#!">Terminos de Uso.</a>
                            <br>
                            <a href="#!">Politica y Privacidad</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
