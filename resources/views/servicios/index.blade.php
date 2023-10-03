
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar vertical -->

            @include('components.layouts.barraNav')

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
