<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QRScanner - Inicio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .caja {
            padding: 15px;
            height: 100vh;
            z-index: -1;
            background-image: url('img/home.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            opacity: 1 !important;
        }

        body {
            font-family: 'Nunito', sans-serif !important;
            background: rgb(57, 49, 196);
            background: linear-gradient(90deg, rgba(57, 49, 196, 1) 9%, rgba(46, 46, 219, 1) 35%, rgba(6, 71, 162, 1) 75%, rgba(0, 212, 255, 1) 100%);

        }

        .login {
            color: black;
            font-weight: 700;
            font-size: 30px;
            background-color: white;
            padding: 0 10px 0 10px;

        }

        a {
            text-decoration: none !important;
        }

        .main a {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="row  caja">
                    <div class="col-12 border ">
                        <img src="{{ asset('logo.png') }}" alt="" class="img-fluid" style="padding-top: 25px">


                        <div style="padding-top:50px">
                        </div>

                        <div class="col-12 text-center">
                            @if (Route::has('login'))
                                <div style="z-index: -55">
                                    @auth
                                        <a href="{{ url('/mi-cuenta') }}" class="login">Mi cuenta</a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"> Salir</button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="login">Iniciar Sesión</a>


                                    @endauth
                                </div>
                            @endif




                        </div>
                    </div>



                </div>
            </div>
        </div>



</body>

</html>
