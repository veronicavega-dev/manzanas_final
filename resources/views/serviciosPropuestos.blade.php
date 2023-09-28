@extends('layouts.app')

@section('form')
    <h1 class="text-center">¿Estás interesad@ en nuestros servicios?</h1>
    <h3 class="text-center">Haz tu solicitud</h3>
    <div class="p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <form action="{{ route('cuidadoras.agregar') }}" method="POST">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="tipoDoc" class="form-label">Tipo de documento</label>
                                <select name="tipoDoc" class="form-control">
                                    <option value="opcion1">Cédula Ciudadanía</option>
                                    <option value="opcion2">Cédula Extranjería</option>
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
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
@endsection
