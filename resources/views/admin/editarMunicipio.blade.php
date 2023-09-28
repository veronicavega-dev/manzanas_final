@extends('layouts.app')
@extends('components.layouts.formulario')


@section('content') 
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
                                    <a href="{{route('servicio.index')}}" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-chart-line fa-fw me-3"></i><span>Registrar servicio</span></a>
                                        
                            <a href="{{ route('establecimiento.index') }}" class="list-group-item list-group-item-action py-2 ripple">
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


<div class="container-fluid">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card p-5">
                <h3 class="card-title">Editar informacion</h3>

                <div class="card-body">
                    @if (isset($infoMunicipio))
                    <form method="post" action="{{route('producto.guardar',$infoMunicipio)}}">
                        @csrf  @method('PATCH')
                        <input type="hidden" name="id" value="{{ $infoMunicipio->id }}">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $infoMunicipio->nombre }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                @endif

                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>



@endsection
