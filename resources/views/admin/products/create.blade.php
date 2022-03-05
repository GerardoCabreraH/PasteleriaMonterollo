@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Registro de productos')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Registro de productos</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admin.products.form')
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{route('products.index')}}">Regresar</a>
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
