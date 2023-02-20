@extends('theme.back.app')

@section('title', 'Controles QR')
@section('contenido')
    <h2 class="text-center pt-2">
        Reporte QR
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <br><br>
                            <form class="row g-3" action="">
                                <div class=" col-md-6">
                                    <label class="font-weight-bold">Etiqueta de Identificación</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="etiqueta"
                                        value="{{ $qr }}" readonly>

                                </div>


                                <div class=" col-md-6">
                                    <label class="font-weight-bold">Asignado A</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="etiqueta"
                                        value="{{ $data->asignadoa }}" readonly>

                                </div>
                                <div class=" col-md-6">
                                    <label for="inputPassword4">Fecha de Asignación</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="etiqueta"
                                        value="{{ $data->fecha }}" readonly>

                                </div>

                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Descripción del bien</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        readonly>{{ $data->descripcion }} </textarea>

                                </div>
                                <div class="col-12">
                                    <label for="inputCity" class="form-label">Foto de primera asignación </label> <br>
                                    <img src="{{ $foto }}" class="img-fluid" alt="">

                                </div>

                                <div class="col-12">
                                    <div class="card">
                                        <label for="inputCity" class="form-label">Lista de Controles </label>
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
                                                                    <th scope="col">Foto</th>

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
                                                                        <td> <img src="{{ $control['imagen'] }}" alt=""
                                                                                class="img-fluid" width="150px">
                                                                            <div class="card-footer">
                                                                                <a href="{{ $control['imagen'] }}"
                                                                                    class="btn btn-primary"> Ver Foto</a>
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

                                    <div class="card text-center">
                                        <h2>
                                            QR
                                        </h2>
                                        <section class="justify-content-center">
                                            {{ QrCode::size(100)->generate($qr) }} </section>

                                    </div>
                                </div>

                            </form>

                            <hr>



                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
