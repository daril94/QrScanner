<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">

                @if (Auth::user()->rol == 'administrador' || Auth::user()->rol == 'monitor')
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('mi-cuenta/dashboard') }}" aria-expanded="false"><i
                                class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                @endif

                @if (Auth::user()->rol == 'administrador' || Auth::user()->rol == 'bodega')

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('mi-cuenta/etiqueta/elegir') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar"></i><span class="hide-menu">Crear Etiqueta QR</span></a></li>
                @endif


                @if (Auth::user()->rol == 'administrador' || Auth::user()->rol == 'bodega')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('mi-cuenta/etiqueta/reponer') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar"></i><span class="hide-menu">Reponer Etiqueta QR</span></a></li>
                @endif

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('mi-cuenta/etiqueta/leer') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Leer QR</span></a></li>


                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('mi-cuenta/etiqueta/listar') }}" aria-expanded="false"><i
                                class="mdi mdi-border-inside"></i><span class="hide-menu">Listar Etiquetas</span></a>
                    </li>

                @if (Auth::user()->rol == 'administrador' || Auth::user()->rol == 'control' || Auth::user()->rol == 'monitor')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('mi-cuenta/etiqueta/leerC') }}" aria-expanded="false"><i
                                class="mdi mdi-relative-scale"></i><span class="hide-menu">Crear
                                Control</span></a></li>
                @endif
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{ url('mi-cuenta/control/listar') }}" aria-expanded="false"><i
                        class="mdi mdi-relative-scale"></i><span class="hide-menu">Ver
                        Controles</span></a></li>
                @if (Auth::user()->rol == 'administrador')
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                class="hide-menu">Autenticación </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ url('mi-cuenta/usuario/registrar') }}"
                                    class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">
                                        Registrar </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ url('mi-cuenta/usuario/listar') }}"
                                    class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">
                                        Editar </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ url('mi-cuenta/usuario/eliminar') }}"
                                    class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">
                                        Eliminar </span></a>
                            </li>

                        </ul>
                    </li>
                @endif




                <br><br><br><br>

                <li class="sidebar-item justify-content-center" style="bottom: 0">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary"> Salir</button>
                    </form>
                </li>




            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
