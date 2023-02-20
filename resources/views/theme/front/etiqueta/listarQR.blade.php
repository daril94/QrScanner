@extends('theme.back.app')


@section('contenido')
<h2 class="text-center pt-2">
    Listado de etiquetas QR
</h2>
<div class="container">
    <div class="row">
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




