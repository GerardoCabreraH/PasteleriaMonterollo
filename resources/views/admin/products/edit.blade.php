@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Modificación del producto')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Modificación del producto {{$producto->name}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('products.update', $producto) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('admin.products.form')
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{route('products.show', $producto)}}">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
