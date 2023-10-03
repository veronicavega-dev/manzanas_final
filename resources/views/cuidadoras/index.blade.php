@extends('layouts.app')
{{-- @extends('cuidadoras.formCuidadoras') --}}


@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar vertical -->
            {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
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
            </nav> --}}
            @include('components.layouts.barraNav')


            <!-- Contenido principal -->
            <h1>Cuidadoras de Manzanitas</h1>

            <main class="col-md-3">

                <div class="content">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Cuidadoras
                    </button>
                 </div>
                <div class="table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Tipo documento</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Servicio seleccionado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($busqueda as $x)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$x->tipoDoc}}</td>
                                <td>{{$x->documento}}</td>
                                <td>{{$x->apellido}}</td>
                                <td>{{$x->telefono}}</td>
                                <td>{{$x->correo}}</td>
                                <td>{{$x->ciudad}}</td>
                                <td>{{$x->direccion}}</td>
                                <td>{{$x->ocupacion}}</td>
                                <td>{{$x->servicosInteres}}</td>
                                
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        editar
                                    </button>

                                    <button type="button" class="btn btn-danger" >
                                        eliminar
                                    </button>
                                </td>
                            </tr>
                                
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    {{-- modal cuidadoras  agregar --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoria de Servicio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('cuidadoras.agregar') }}" method="POST">
                    @csrf

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tipoDoc" class="form-label">Tipo de documento</label>
                            <select name="tipoDoc" class="form-control">
                                <option value="Cedula Ciudadana">Cédula Ciudadanía</option>
                                <option value="Cedula Extranjería">Cédula Extranjería</option>
                            </select>
                            @error('tipoDoc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="documento" class="form-label">Número de Documento</label>
                            <input type="text" class="form-control" id="documento" name="documento">
                            @error('documento')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                            @error('apellido')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                            @error('telefono')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                            @error('correo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad">
                            @error('ciudad')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                            @error('direccion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ocupacion" class="form-label">Ocupación</label>
                            <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                            @error('ocupacion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="servicioInteres" class="form-label">Servicio de Interés</label>
                            <input type="text" class="form-control" id="servicioInteres" name="servicioInteres">
                            @error('servicioInteres')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="servicio_id" class="form-label">Categoría</label>
                            <select name="servicio_id" class="form-control">
                                @foreach ($servicio as $x)
                                    <option value="{{ $x->id }}">{{ $x->nombre }}</option>
                                @endforeach
                            </select>
                            @error('servicio_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit">Guardar</button>
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div> 

    
@endsection
