@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Información del pedido')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Información del pedido {{$pedido->code}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h3 class="text-center">Datos personales</h3>
                                    <div class="form-group">
                                        <p><strong>Nombre del cliente:</strong> {{$pedido->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <p><strong>Email del cliente:</strong> {{$pedido->email}}</p>
                                    </div>
                                    <div class="form-group">
                                        <p><strong>Teléfono del cliente:</strong> {{$pedido->phone}}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="text-center">Detalles del pedido</h3>
                                    <div class="form-group">
                                        <p><strong>Codigo del pedido:</strong> {{$pedido->code}}</p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                            <strong>Sabores:</strong><br>
                                            @foreach($pedidoSabores as $sabor){{$sabor->name}}<br>@endforeach
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                            <strong>Adornos:</strong><br>
                                            @foreach($pedidoAdornos as $adorno){{$adorno->name}}<br>@endforeach
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p><strong>Descripción del pedido:</strong> {{$pedido->description}}</p>
                                    </div>
                                    <div class="form-group">
                                        <p><strong>Total del pedido:</strong> ${{number_format($pedido->total, 2)}}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <p>Acciones:</p>
                                        <a class="btn btn-primary btn-block" href="{{ URL::previous() }}">Regresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
