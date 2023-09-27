@extends('layouts.app')
@extends('components.layouts.formulario')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar vertical -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('admin.perfil') }}" class="list-group-item list-group-item-action py-2 ripple"
                            aria-current="true">
                            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Perfil</span>
                        </a>
                        <a href="{{ route('admin.registroMunicipio') }}"
                            class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Registrar municipio</span>
                        </a>
                        <a href="{{ route('admin.registroManzana') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-lock fa-fw me-3"></i><span>Registrar manzana</span></a>
                                <a href="{{route('servicio.index')}}" class="list-group-item list-group-item-action py-2 ripple"><i
                                    class="fas fa-chart-line fa-fw me-3"></i><span>Registrar servicio</span></a>
                        <a href="{{ route('admin.registroEstablecimiento') }}" class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Registro establecimiento</span>
                        </a>
                        <a href="{{route('cuidadoras.index')}}" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Registro de cuidadoras</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-bar fa-fw me-3"></i><span>Reporte</span></a>

                                <a href="{{route('categoria.index')}}">
                                    <i
                                class="fas fa-chart-bar fa-fw me-3"></i><span>categoria</span>
                                </a>
                    </div>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-11 px-md-4">

                <div class="content">
                    <h1>Manzanas</h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar manzana
                    </button>
                    </div>
                <div class="table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        editar
                                    </button>

                                    <button type="button" class="btn btn-danger" >
                                        eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        editar
                                    </button>

                                    <button type="button" class="btn btn-danger" >
                                        eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        editar
                                    </button>

                                    <button type="button" class="btn btn-danger" >
                                        eliminar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
