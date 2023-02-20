@extends('theme.back.app')

@section('title', 'Controles Registrados')
@section('contenido')
    <br>
    <h2 class="text-center">
        Imprimir Control : Etiqueta <b>{{ $etiqueta }}</b>
    </h2><br>
    <div class="col-12">
        <div class="card">
            <h3 class="text-center">
                Lista de controles
            </h3>
            <br><br>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Etiqueta</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Tipo de Control</th>
                                        <th scope="col">Observaciones</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Ciudad</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($controles as $control)
                                        <tr>
                                            <th scope="row">{{ $control['id'] }}</th>
                                            <td>{{ $control['etiqueta'] }}</td>
                                            <td>{{ $control['fecha'] }}</td>
                                            <td>{{ $control['tipoControl'] }}</td>
                                            <td>{{ $control['observaciones'] }}</td>
                                            <td>{{ $control['ciudad'] }}</td>
                                            <td>{{ $control['colaborador'] }}</td>
                                            <td>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary"> Imprimir
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>

                                    @endforeach



                                </tbody>
                            </table>
                        </div>





                    </div>
                </div>
            </div>


        </div>


    </div>

    <br><br> <br><br> <br><br> <br>
@endsection
