
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @include('components.layouts.barraNav')


            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-11 px-md-4">

                <div class="content">
                    <h1>Establecimiento </h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearCategoria">
                        Registrar Establecimiento
                    </button>
                    </div>
                    <div class="table">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Responsable</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($establecimiento as $x)
                                <tr>
                                    <td>{{$x->id}}</td>
                                    <td>{{$x->nombre}}</td>
                                    <td>{{$x->responsable}}</td>
                                    <td>{{$x->direccion}}</td>
                                    <td>{{$x->servicio_id}}</td>
                                    <td>
                                        <a href="{{route('categoria.edit', $x->id)}}" class="edit">✏</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    

                    <!-- Modal para crear  establecimiento-->
    <div class="modal fade" id="crearCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Establecimiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('establecimiento.agregar')}}" method="POST">
                        {{-- {{route('guardar.formulario')}} --}}
                        @csrf  
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="responsable" class="form-label">Responsable</label>
                            <input type="text" class="form-control" id="responsable" name="responsable" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="servicio_id" class="form-label">Categoria</label>
                            <select name="servicio_id" id="">
                                @foreach ($servicio as $x)
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
