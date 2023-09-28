@extends('layouts.app')

@section('form')
    <h1 class="text-center ">¿Estas interesad@ en nuestros servicios?</h1>
    <h3 class="text-center">haz tu solicitud</h3>
    <div class="p-5">

        <div class="container mt-5">
            <form>
                <!-- Campo de Manzana -->
                <div class="form-group">
                    <label for="manzana">Manzana:</label>
                    <input type="text" class="form-control" id="manzana"
                        placeholder="Ingresa la información de la manzana">
                </div>

                <!-- Campo de Servicio -->
                <div class="form-group">
                    <label for="servicio">Servicio:</label>
                    <input type="text" class="form-control" id="servicio"
                        placeholder="Ingresa la información del servicio">
                </div>

                <!-- Campo de Fecha -->
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha">
                </div>

                <!-- Campo de Hora -->
                <div class="form-group">
                    <label for="hora">Hora:</label>
                    <input type="time" class="form-control" id="hora">
                </div>

                <!-- Botón de Enviar -->
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </form>
        </div>
    </div>
@endsection