@extends('theme.back.app')
@section('title', 'Elegir Etiqueta')

@section('contenido')
<h2 class="text-center pt-2">
    Crear una nueva etiqueta QR
</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            <form action="{{url("mi-cuenta/etiqueta/crear")}}" method="POST">
             @csrf
                <div class="form-group">
                    <label for="inputAddress">Herramienta</label>
                    <select name="idHerramienta" class="form-control" >
                        <option value="">---Elegir Etiqueta---</option>

                   @foreach ($herramientas as $herramienta)
                       <option value="{{$herramienta['etiqueta']}}">{{$herramienta['etiqueta']}}</option>
                   @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>

        </div>
    </div>
</div>
@endsection




