@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Navbar vertical -->
        {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.perfil') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Perfil</span>
                    </a>
                    <a href="{{ route('admin.registroMunicipio') }}" class="list-group-item list-group-item-action py-2 ripple">
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


                        <a href="{{route('categoria.index')}}">
                            <i
                        class="fas fa-chart-bar fa-fw me-3"></i><span>categoria</span>
                        </a>
                </div>
            </div>
        </nav> --}}

        @include('components.layouts.barraNav')



        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto  mt-5 col-lg-10 px-md-4">

            <h1 class="manzanitas">Welcome to Manzanitas!</h1>
        </main>
    </div>
</div>

    
@endsection
