@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Información del usuario')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Información del usuario {{$usuario->name}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <p><strong>Código del usuario:</strong> {{$usuario->code}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Nombre del usuario:</strong> {{$usuario->name}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Email del usuario:</strong> {{$usuario->email}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Rol del sistema:</strong> {{$usuario->role}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Acciones:</strong></p>
                                <a class="btn btn-primary btn-block" href="{{route('users.index')}}">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
