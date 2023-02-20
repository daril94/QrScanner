@extends('theme.back.app')
@section('title', 'Listar Etiquetas')

@section('contenido')
<br>
<h2 class="text-center pt-2">
    Listado de etiquetas QR
</h2>
<br>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-10">

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Asignado A</th>
                    <th scope="col">Herramienta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Etiqueta</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($herramientas as $herramienta)
                    <tr>
                        <th scope="row">{{$herramienta['id']}}</th>
                        <td>{{$herramienta['asignadoa']}}</td>
                        <td>{{$herramienta['herramienta']}}</td>
                        <td>{{$herramienta['tipo']}}</td>
                        <td>{{$herramienta['etiqueta']}}</td>
                      </tr>

                    @endforeach



                </tbody>
              </table>




        </div>
    </div>
</div>
@endsection




