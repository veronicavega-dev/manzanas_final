@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Navbar vertical -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.perfil') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Perfil</span>
                    </a>
                    <a href="{{ route('admin.registroMunicipio') }}" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Registrar municipio</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-lock fa-fw me-3"></i><span>Registrar manzana</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Registrar servicio</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>Registro establecimiento</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Registro de cuidadoras</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Reporte</span></a>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="content">
    
                <h1>Gestion de manzanas</h1>
                <p>podras ver tus datos y actualizarlos </p>
                <i class='bx bxs-edit-alt'></i><a href="">Editar perfil</a>
            </div>
        </main>
    </div>
</div>

    
@endsection
  



