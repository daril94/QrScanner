@extends('theme.back.app')
@section('title', 'Crear QR')

@section('contenido')
    <br><br>
    <h2 class="text-center ">
        Generar nueva etiqueta QR
    </h2>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="row g-3" action="{{ route('admin.files.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <br><br><br>
                    <div class="visible-print text-center" style="border: 1px solid black; padding:15px">
                        {{ QrCode::size(100)->generate($herramienta) }}
                        <br> <br> <br>

                        {{ $usuario }} - {{ date('d-m-Y', strtotime($fecha)) }}
                    </div>

                    <br><br><br>
                    <div class="col-12">
                        <label for="inputCity" class="form-label text-center font-weight-bold">Cargar primer Foto del
                            bien</label>
                        <br>
                        <input type="file" name="file" id="" accept="image/*">
                        <br>
                        @error('file')
                            <small class="text-danger"> {{ $message }}</small>

                        @enderror
                        <input type="text" value="{{ $id }}" name="id" readonly hidden>
                    </div>
                    <br><br><br>

                    <div class="col-12">
                        <button class="btn btn-success"> Imprimir QR</button>
                    </div>
                </form>


                <br>
            </div>
        </div>


    </div>
@endsection
