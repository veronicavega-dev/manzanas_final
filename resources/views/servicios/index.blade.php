
@extends('layouts.app')

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
                        <a href="{{ route('admin.registroServicio') }}" class="list-group-item list-group-item-action py-2 ripple"><i
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
                    <h1>Servicios </h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearCategoria">
                        Registrar servicio
                    </button>
                    </div>
                    <div class="table">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th> <!-- Cambié "descripcion" a "Descripción" -->
                                    <th scope="col">Categoría</th> <!-- Cambié "categoria" a "Categoría" -->
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicio as $x)
                                <tr >
                                    <td>{{$x->id}}</td>
                                    <td>{{$x->nombre}}</td>
                                    <td>{{$x->descripccion}}</td>
                                    <td>{{$x->categoria_id}}</td>
                                    <td>
                                        <a href="{{route('categoria.edit', $x->id)}}" class="edit">✏</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    

                    <!-- Modal para crear categoria de Servicios -->
    <div class="modal fade" id="crearCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo servicio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('servicio.agregar')}}" method="POST">
                        {{-- {{route('guardar.formulario')}} --}}
                        @csrf  
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripccion" class="form-label">descripcion valid</label>
                            <input type="text" class="form-control" id="descripcion" name="descripccion" required>

                        </div>
                        
                        <div class="mb-3">
                            <label for="categoria_id" class="form-label">Categoria</label>
                            <select name="categoria_id" id="">
                                @foreach ($categorias as $x)
                                <option value="{{$x->id}}">{{$x->nombre}}</option>
                                @endforeach
                            </select>
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
        </div>
    </div>
@endsection
