@extends('theme.back.app')
@section('title', 'Dashboard')
@section('contenido')
<br>
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">
            Dashboard
        </h2>
        <br><br>
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">Estadísticas del Sitio</h4>

                        <h5 class="card-subtitle"></h5>
                    </div>

                    <br>  <br>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-9">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-user mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">2540</h5>
                                    <small class="font-light">Total Controles</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-plus mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">20</h5>
                                    <small class="font-light">Controladores</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">656</h5>
                                    <small class="font-light">Registros</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-tag mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">95</h5>
                                    <small class="font-light">Repotenciaciones</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-table mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">100</h5>
                                    <small class="font-light">Controles en el ultimo mes</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-globe mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">65</h5>
                                    <small class="font-light">Nuevos Items</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
