@extends('layouts.app')
{{-- @extends('components.layouts.formulario') --}}


@section('content')
    <div class="container-fluid">
        <div class="row">

            @include('components.layouts.barraNav')

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-11 px-md-4">

                <div class="content">
                    <h1>Manzanas</h1>
                    <p>Las manzanas estan compuestas por municipios, las manzanas son aquellas que generaran la relacion 
                        entre el servicio que estas solicitando y la ubicacion
                    </p>
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
                            @foreach ($busqueda as $x)
                            <tr >
                                <td>{{$x->id}}</td>
                                <td>{{$x->nombre}}</td>
                                <td>{{$x->localidad}}</td>
                                <td>{{$x->direccion}}</td>
                                <td>
                                    <a href="{{route('categoria.edit', $x->id)}}" class="edit">✏</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Manzana</h1>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <form action="{{ route('manzana.add') }}" method="POST">
                @csrf
            
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                        @error('nombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-3">
                        <label class="col-form-label">Localidad:</label>
                        <input type="text" name="localidad" class="form-control" value="{{ old('localidad') }}">
                        @error('localidad')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label">Direccion:</label>
                        <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                        @error('direccion')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-3">
                        <label for="municipio_id" class="form-label">Selecciona Municipio</label>
                        <select name="municipio_id" class="form-control">
                            @foreach ($municipio as $x)
                                <option value="{{ $x->id }}" {{ old('municipio_id') == $x->id ? 'selected' : '' }}>
                                    {{ $x->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('municipio_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            @if(session('success'))
                <script>
                    $(document).ready(function(){
                        $('#exampleModal').modal('hide'); 
                    });
                </script>
            @endif
        </div>
    </div>
</div>





    </div>
@endsection
