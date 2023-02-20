@extends('theme.back.app')
@section('contenido')
<div class="col-12">
    <div class="card">
        <label for="inputCity" class="form-label">Lista de Usuarios </label>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Rol</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <th scope="row">{{ $usuario['id'] }}</th>
                                        <td>{{ $usuario['nombre'] }}</td>
                                        <td>{{ $usuario['rol'] }}</td>


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
</div>
@endsection
