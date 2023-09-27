@extends('layouts.app')
@extends('components.layouts.formulario')


    @section('content') 

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

<main class="col-md-9 ms-sm-auto col-lg-11 px-md-4">

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearProductoModal" >
        {{-- data-url="{{ route('guardar.formulario') --}}
        Crear Municipio
    </button>




<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>


            </tr>
        </thead>
        <tbody>
        @foreach ($municipios as $municipio)
            <tr>
                <td>{{ $municipio->id }}</td>
                <td>{{ $municipio->nombre }}</td>
                <td> 
                    <td><a href="{{route('info.editar', $municipio->id)}}" class="edit"   >✏</a></td>
                </td>
            </tr>
        @endforeach
        </tbody>



    </table>







    </ul>

    <!-- Modal para crear Municipio -->
    <div class="modal fade" id="crearProductoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo municipio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('guardar.formulario')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Municipio</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar Municipio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</main>
@endsection

