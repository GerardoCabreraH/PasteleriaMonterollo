@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Gestión de usuarios')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="count" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @include('partials.status')
                    <h1 class="text-center">Gestión de usuarios</h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-user"></i></span></p>
                                    @if ($usuarios->count() == 1)
                                        <p>{{$usuarios->count()}} Usuario</p>
                                    @else
                                        <p>{{$usuarios->count()}} Usuarios</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="usuarios" class="section-light">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h2 class="text-center">Tabla de usuarios</h2>
                            <a href="{{route('users.create')}}" class="btn btn-success btn-block">Crear</a>
                        </div>
                        <div class="col-12 col-sm-12 mt-5">
                            <table id="tablaDashboard" class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>Codigo del usuario</th>
                                        <th>Nombre del usuario</th>
                                        <th>Rol del usuario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($usuarios as $usuario)
                                        <tr>
                                            <td data-label="Código del usuario">
                                                <p class="mt-2">{{$usuario->code}}</p>
                                            </td>
                                            <td data-label="Nombre del usuario">
                                                <p class="mt-2">{{$usuario->name}}</p>
                                            </td>
                                            <td data-label="Rol del usuario">
                                                <p class="mt-2">{{$usuario->role}}</p>
                                            </td>
                                            <td data-label="Acciones">
                                                <div class="form-group d-flex align-items-sm-center flex-sm-row flex-column mt-2">
                                                    <div class="p-1">
                                                        <a class="btn btn-primary" href="{{route('users.show', $usuario)}}">Ver</a>
                                                    </div>
                                                    <div class="p-1">
                                                        <a class="btn btn-warning" href="{{route('users.edit', $usuario)}}">Editar</a>
                                                    </div>
                                                    <div class="p-1">
                                                        <a class="btn btn-danger" href="{{ route('users.destroy', $usuario) }}" onclick="event.preventDefault(); document.getElementById('delete-data').submit();">
                                                            Eliminar
                                                        </a>
                                                        <form id="delete-data" action="{{ route('users.destroy', $usuario) }}" method="POST">
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
                            {!! $usuarios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
