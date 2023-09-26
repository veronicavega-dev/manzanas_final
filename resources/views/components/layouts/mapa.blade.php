@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="map"></div>
        </div>
        <div class="col-md-4">
            @foreach($manzanas as $manzana)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $manzana->nombre }}</h5>
                    <p class="card-text">{{ $manzana->localidad }}</p>
                    <p class="card-text">{{ $manzana->direccion }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
