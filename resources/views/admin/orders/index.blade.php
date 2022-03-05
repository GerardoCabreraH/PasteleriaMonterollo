@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Gestión de pedidos')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="count" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @include('partials.status')
                    <h1 class="text-center">Gestión de pedidos</h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-list"></i></span></p>
                                    @if ($pedidos->count() == 1)
                                        <p>{{$pedidos->count()}} Pedido</p>
                                    @else
                                        <p>{{$pedidos->count()}} Pedidos</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card text-white bg-success mb-3 h-100 shadow">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-money-bill"></i></span></p>
                                    <p>${{number_format($pedidos->sum('total'), 2)}} Ingresos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pedidos" class="section-light">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h2 class="text-center">Tabla de pedidos</h2>
                        </div>
                        <div class="col-12 col-sm-12 mt-5">
                            <table id="tablaDashboard" class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>Codigo del pedido</th>
                                        <th>Nombre del cliente</th>
                                        <th>Total del pedido</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pedidos as $pedido)
                                    <tr>
                                        <td data-label="Codigo del pedido">
                                            <p class="mt-2">{{$pedido->code}}</p>
                                        </td>
                                        <td data-label="Nombre del cliente">
                                            <p class="mt-2">{{$pedido->name}}</p>
                                        </td>
                                        <td data-label="Total del pedido">
                                            <p class="mt-2">${{number_format($pedido->total, 2)}}</p>
                                        </td>
                                        <td data-label="Acciones">
                                            <div
                                                class="form-group d-flex align-items-sm-center flex-sm-row flex-column mt-2">
                                                <div class="p-1">
                                                    <a class="btn btn-primary"
                                                        href="{{route('orders.show', $pedido)}}">Ver</a>
                                                </div>
                                                <div class="p-1">
                                                    <a class="btn btn-warning"
                                                        href="{{route('orders.edit', $pedido)}}">Editar</a>
                                                </div>
                                                <div class="p-1">
                                                    <a class="btn btn-danger" href="{{ route('orders.destroy', $pedido) }}"
                                                        onclick="event.preventDefault(); document.getElementById('delete-data').submit();">
                                                        Eliminar
                                                    </a>
                                                    <form id="delete-data" action="{{ route('orders.destroy', $pedido) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" data-label="Codigo" class="text-center">
                                            Sin resultados
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {!! $pedidos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
