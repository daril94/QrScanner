@extends('theme.back.app')
@section('title', 'Cargar Reporte QR')


@section('contenido')
    <h2 class="text-center pt-2">
        Cargar Reporte QR
    </h2>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <br><br>
                            <form class="row g-3" action="">
                                <div class=" col-md-6">
                                    <label for="inputPassword4">Etiqueta de Identificación</label>
                                    <input type="text" class="form-control" id="inputPassword4" name=""
                                        value="{{ $qr }}" readonly>

                                </div>


                                <div class=" col-md-6">
                                    <label for="inputPassword4">Asignado A</label>
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
                                        readonly>{{ $data->descripcion }}</textarea>

                                </div>
                                <div class="col-12">
                                    <label for="inputCity" class="form-label">Foto de primera asignación </label>
                                    <br>
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
                                                        <table class="table">
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
                                                                        <td>{{ $control['colaborador'] }}</td>
                                                                        <td>{{ $control['ciudad'] }}</td>
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
                                </div>


                            </form>

                            <hr>

                            <h2>
                                Nuevo Control
                            </h2>
                            <form class="row g-3" action="{{ route('control.guardar') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Tipo de Control</label>
                                    <select name="tipoControl" class="form-control" id="exampleFormControlSelect1"
                                        name="tipo">
                                        <option>---Seleccionar Tipo de Control---</option>
                                        <option>Inspección Programada. </option>
                                        <option>Inspección Aleatoria</option>
                                        <option>Eventos Inesperados</option>
                                        <option>Repotenciación del bien</option>
                                        <option>Solicitud de Reposición del bien</option>

                                    </select>
                                </div>

                                <input type="text" value="{{ $data->id }}" name="id" readonly hidden>
                                <input type="text" value="{{ $data->etiqueta }}" name="etiqueta" readonly hidden>
                                <div class="col-md-6">
                                    <label for="inputPassword4">Denominación</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="denominacion"
                                        value="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4">Fecha del evento</label>
                                    <input type="date" class="form-control" id="inputPassword4" name="fecha" value="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4">Ciudad</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="ciudad" value="">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Explicación del evento </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="observaciones"></textarea>

                                </div>
                                <div class="col-12">
                                    <label for="inputCity" class="form-label">Foto de cómo queda el bien
                                        después del evento</label>
                                    <br>
                                    <input type="file" name="file" id="" accept="image/*">
                                    <br>
                                    @error('file')
                                        <small class="text-danger"> {{ $message }}</small>

                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4">Nombre del Usuario</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="colaborador"
                                        value="{{ Auth::user()->nombre }}" readonly>

                                </div>


                                <input type="text" class="form-control" id="inputPassword4" name="iduser"
                                    value="{{ Auth::user()->id }}" hidden>

                                <div class="col-md-6">
                                    <label for="inputPassword4">Fecha de Despacho</label>
                                    <input type="text" class="form-control" id="inputPassword4" name=""
                                        value="{{ date('Y-m-d H:i:s') }}" readonly>

                                </div>


                                <div class="card text-center">
                                    <h2>
                                        QR
                                    </h2>
                                    <section class="justify-content-center">
                                        {{ QrCode::size(100)->generate($qr) }} </section>




                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

@endsection
