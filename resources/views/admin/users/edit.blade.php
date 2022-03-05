@extends('layouts.template')

@section('title', 'Pasteleria Monterrollo | Modificación del usuario')

@section('content')
@include('partials.header')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Modificación del usuario {{$usuario->name}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('users.update', $usuario) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('admin.users.form')
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{route('users.index')}}">Regresar</a>
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
