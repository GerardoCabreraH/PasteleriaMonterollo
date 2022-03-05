@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Modificación del pedido')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Modificación del pedido {{$pedido->code}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('orders.update', $pedido) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <h2 class="text-center">Datos personales</h2>
                                        <div class="form-group">
                                            <label for="name">Nombre completo</label>
                                            <input type="text" name="name" id="name" placeholder="Nombre" class="form-control"
                                                value="{{old('name', $pedido->name)}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Email" class="form-control"
                                                value="{{old('email', $pedido->email)}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Telefono</label>
                                            <input type="phone" name="phone" id="phone" placeholder="Telefono" maxlength="10" class="form-control"
                                                value="{{old('phone', $pedido->phone)}}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h2 class="text-center">Detalles del pedido</h2>
                                        <div class="form-group">
                                            <label>Sabores</label>
                                            @forelse ($sabores as $sabor)
                                                <div class="form-check">
                                                    <input @forelse($pedidoSabores as $producto){{ (old('flavors', $producto->id) == $sabor->id ? ' checked' : '') }} @empty {{ (old('flavors') == $sabor->name ? ' checked' : '') }} @endforelse class="form-check-input" name="flavors[]"
                                                    type="checkbox" id="{{$sabor->name}}" value="{{$sabor->name}}" data-price="{{$sabor->price}}"
                                                    onclick="totalIt()">
                                                    <label class="form-check-label" for="{{$sabor->name}}">{{$sabor->name}}</label>
                                                </div>
                                            @empty
                                                <p>Sabores agotados</p>
                                            @endforelse
                                        </div>
                                        <div class="form-group">
                                            <label>Adornos</label>
                                            @forelse ($adornos as $adorno)
                                                <div class="form-check">
                                                    <input @forelse($pedidoAdornos as $producto){{ (old('flavors', $producto->id) == $adorno->id ? ' checked' : '') }} @empty {{ (old('flavors') == $adorno->name ? ' checked' : '') }} @endforelse  class="form-check-input" name="toppings[]" type="checkbox" id="{{$adorno->name}}" value="{{$adorno->name}}" data-price="{{$adorno->price}}"
                                                    onclick="totalIt()">
                                                    <label class="form-check-label" for="{{$adorno->name}}">{{$adorno->name}}</label>
                                                </div>
                                            @empty
                                                <p>Adornos agotados</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Descripción del pedido</label>
                                            <textarea type="text" id="description" name="description" rows="5" placeholder="Descripción"
                                                class="form-control">{{old('description', $pedido->description)}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="total">Total del pedido</label>
                                            <input type="text" name="total" id="total" placeholder="Total" class="form-control" readonly
                                                value="{{old('total', number_format($pedido->total, 2))}}">
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-primary btn-block" href="{{ URL::previous() }}">Regresar</a>
                                            <button type="button" class="btn btn-success btn-block">Enviar</button>
                                        </div>
                                    </div>
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
