@extends('theme.back.app')

@section('title', 'Recrear QR')
@section('contenido')
    <br><br>
    <h2 class="text-center ">
        Generar etiqueta QR
    </h2>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="row g-3" action="{{ route('etiqueta.reponer') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="visible-print text-center" style="border: 1px solid black; padding:15px">
                        {{ QrCode::size(100)->generate($herramienta) }}
                        <br> <br> <br>

                        {{ $usuario }} - {{ date('d-m-Y', strtotime($fecha)) }}
                    </div>


                    <br><br>
                    <div class="col-12">
                        <button class="btn btn-success"> Imprimir QR</button>
                    </div>
                </form>


                <br>
            </div>
        </div>


    </div>
@endsection
