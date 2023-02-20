@extends('theme.back.app')

@section('title', 'Controles Registrados')
@section('contenido')
    <br>
    <div class="col-12">
        <div class="card">
            <h2 class="text-center">
                Lista de Etiquetas
            </h2>
            <br><br>
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('control.listar') }}" class="row g-3" method="GET">

                            <div class="col-8">
                                <input type="text" name="texto" class="form-control" id="" value="{{ $texto }}">
                            </div>
                            <div class="col-auto">

                                <input type="submit" value="Buscar" class="btn btn-primary">
                            </div>


                        </form>
                    </div>

                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Etiqueta</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Tipo de Control</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Ver</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($controles) <= 0)
                                        <tr>
                                            <td colspan="8">No hay registros </td>
                                        </tr>



                                    @else
                                        @foreach ($controles as $control)
                                            <tr>
                                                <th scope="row">{{ $control->id }}</th>
                                                <td>{{ $control->etiqueta }}</td>
                                                <td>{{ $control->fecha }}</td>
                                                <td>{{ $control->tipoControl }}</td>
                                                <td>{{ $control->colaborador }}</td>
                                                <td>{{ $control->ciudad }}</td>
                                                <td>
                                                    <form action="{{ route('control.seleccionar') }}">
                                                        <input type="text" hidden value="{{$control->id}}" name="id">
                                                        <input type="submit" value="Enviar" class="btn btn-primary">
                                                    </form>

                                                </td>

                                            </tr>

                                        @endforeach
                                    @endif


                                </tbody>
                            </table>
                            {{ $controles->links() }}
                        </div>





                    </div>
                </div>
            </div>
        </div>


    </div>

    <br><br> <br><br> <br><br> <br>
@endsection
