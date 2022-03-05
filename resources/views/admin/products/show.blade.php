@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Información del producto')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @if ($producto->type == "Sabor")
                        <h1 class="text-center">Información del sabor {{$producto->name}}</h1>
                    @elseif($producto->type == "Adorno")
                        <h1 class="text-center">Información del adorno {{$producto->name}}</h1>
                    @endif
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                @if(File::exists(public_path('assets/img/products/'.$producto->image)))
                                <img src="{{asset('assets/img/products/'.$producto->image)}}" class="img-fluid img-card" alt="adorno-pastel">
                                @else
                                <img src="{{$producto->image}}" class="img-fluid img-card" alt="adorno-pastel">
                                @endif
                            </div>
                            <div class="form-group">
                                <p><strong>Código del producto:</strong> {{$producto->code}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Nombre del producto:</strong> {{$producto->name}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Tipo de producto:</strong> {{$producto->type}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Precio del producto:</strong> ${{number_format($producto->price, 2)}}</p>
                            </div>
                            <div class="form-group">
                                <p>
                                    <strong>Descripción del producto:</strong><br>
                                    {{$producto->description}}
                                </p>
                            </div>
                            <div class="form-group">
                                <p><strong>Existencias:</strong> {{$producto->stock}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Acciones:</strong></p>
                                <a class="btn btn-primary btn-block" href="{{ URL::previous() }}">Regresar</a>
                                <a class="btn btn-warning btn-block" href="{{route('products.edit', $producto)}}">Editar</a>
                                <a class="btn btn-danger btn-block" href="{{route('products.destroy', $producto)}}" onclick="event.preventDefault(); document.getElementById('delete-data').submit();">Eliminar</a>
                                <form id="delete-data" action="{{ route('products.destroy', $producto) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
