@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Gestión de productos')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="count" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @include('partials.status')
                    <h1 class="text-center">Gestión de productos</h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-box"></i></i></span></p>
                                    @if ($productos->count() == 1)
                                        <p>{{$productos->count()}} Producto</p>
                                    @else
                                        <p>{{$productos->count()}} Productos</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-calculator"></i></span></p>
                                    <p>{{$productos->sum('stock')}} Existencias</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-list"></i></span></p>
                                    @if ($productos->where('type'. "Sabor")->count() == 1)
                                        <p>{{$productos->where('type', "Sabor")->count()}} Sabor</p>
                                    @else
                                        <p>{{$productos->where('type', "Sabor")->count()}} Sabores</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-money-bill"></i></span></p>
                                    @if ($productos->where('type'. "Adorno")->count() == 1)
                                        <p>{{$productos->where('type', "Adorno")->count()}} Adorno</p>
                                    @else
                                        <p>{{$productos->where('type', "Adorno")->count()}} Adornos</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="productos" class="section-light">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h2 class="text-center">Lista de productos</h2>
                            <a href="{{route('products.create')}}" class="btn btn-success btn-block">Crear</a>
                        </div>
                        <div class="col-12 col-sm-12 mt-5">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="card shadow h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-12">
                                                    <h2 class="text-center">Sabores restantes</h2>
                                                </div>
                                                <div class="col-12 col-sm-12 mt-5">
                                                    <ul class="list-group">
                                                        @forelse ($sabores as $producto)
                                                            <li class="list-group-item"><a href="{{route('products.show', $producto)}}">Sabor: {{$producto->name}} Existencias: {{$producto->stock}}</a></li>
                                                        @empty
                                                            <li class="list-group-item">Sin resultados</li>
                                                        @endforelse
                                                    </ul>
                                                    {!! $sabores->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="card shadow h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-12">
                                                    <h2 class="text-center">Adornos restantes</h2>
                                                </div>
                                                <div class="col-12 col-sm-12 mt-5">
                                                   <ul class="list-group">
                                                        @forelse ($adornos as $producto)
                                                            <li class="list-group-item"><a href="{{route('products.show', $producto)}}">Adorno: {{$producto->name}} Existencias: {{$producto->stock}}</a></li>
                                                        @empty
                                                            <li class="list-group-item">Sin resultados</li>
                                                        @endforelse
                                                    </ul>
                                                    {!! $adornos->links() !!}
                                                </div>
                                            </div>
                                        </div>
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
