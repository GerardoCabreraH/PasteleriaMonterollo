@extends('layouts.template')

@section('title', 'Pastelería Monterrollo')

@section('content')
<header id="navbar" class="navbarWeb fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a id="navbarBrand" class="navbar-brand" href="{{route('index')}}"><img
                    src="{{asset('assets/img/Pasteleria Monterrollo-Fondo Blanco.png')}}" alt="logo-monterrollo"
                    class="img-fluid img-navbar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#precios">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pedidos">Pedido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin')}}">Pastelero</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @include('partials.status-guest')
    <section id="inicio" class="hero"></section>
    <section id="nosotros" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="text-center">Sobre nosotros</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center">
                        <div class="card border border-dark">
                            <div class="card-body">
                                <img src="{{asset('assets/img/Pasteleria Monterrollo-Logo.png')}}" alt="logo-monterrollo"
                                    class="img-fluid img-about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="precios" class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="text-center">Precios</h2>
                </div>
                <div id="sabores" class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h3 class="text-center">Lista de sabores</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        @forelse ($sabores as $sabor)
                            <div class="col-12 col-sm-3 my-3">
                                <div class="card card-sabores h-100">
                                    @if(File::exists(public_path('assets/img/products/'.$sabor->image)))
                                    <img src="{{asset('assets/img/products/'.$sabor->image)}}" class="card-img-top img-fluid img-card border-bottom border-dark" alt="producto-pastel">
                                    @else
                                    <img src="{{$sabor->image}}" class="card-img-top img-fluid img-card border-bottom border-dark" alt="producto-pastel">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{$sabor->name}}</h5>
                                        <p class="card-text"><span class="icon"><i class="fas fa-dollar-sign"></i></span>
                                            Precio: ${{number_format($sabor->price, 2)}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 col-sm-12 my-3">
                                <div class="card card-sabores h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Sabores Agotados</h5>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div id="adornos" class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h3 class="text-center">Lista de adornos</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        @forelse ($adornos as $adorno)
                            <div class="col-12 col-sm-3 my-3">
                                <div class="card card-sabores h-100">
                                    @if(File::exists(public_path('assets/img/products/'.$adorno->image)))
                                    <img src="{{asset('assets/img/products/'.$adorno->image)}}"
                                        class="card-img-top img-fluid img-card border-bottom border-dark" alt="producto-pastel">
                                    @else
                                    <img src="{{$adorno->image}}" class="card-img-top img-fluid img-card border-bottom border-dark" alt="producto-pastel">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{$adorno->name}}</h5>
                                        <p class="card-text"><span class="icon"><i class="fas fa-dollar-sign"></i></span>
                                            Precio: ${{number_format($adorno->price, 2)}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 col-sm-12 my-3">
                                <div class="card card-sabores h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Adornos Agotados</h5>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pedidos" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="text-center">Realiza tu pedido</h2>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <form role="form" action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="text-center">Datos personales</h3>
                                <div class="form-group">
                                    <label for="name">Nombre completo</label>
                                    <input type="text" name="name" id="name" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefono</label>
                                    <input type="phone" name="phone" id="phone" placeholder="Telefono" maxlength="10"
                                        class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="text-center">Detalles del pedido</h3>
                                <div class="form-group">
                                    <label for="name">Sabores</label>
                                    @forelse ($sabores as $sabor)
                                        <div class="form-check @error('products') is-invalid @enderror">
                                            <input {{ (old('products') == $sabor->id ? ' checked' : '') }} class="form-check-input" id="{{$sabor->name}}" name="products[]" type="checkbox" value="{{$sabor->id}}" data-price="{{number_format($sabor->price, 2)}}" onclick="totalIt()">
                                            <label class="form-check-label" for="{{$sabor->name}}">{{$sabor->name}}</label>
                                        </div>
                                        @error('products')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    @empty
                                        <p>Sabores agotados</p>
                                    @endforelse
                                </div>
                                <div class="form-group">
                                    <label for="subject">Adornos</label>
                                    @forelse ($adornos as $adorno)
                                    <div class="form-check @error('products') is-invalid @enderror">
                                        <input {{ (old('products') == $adorno->id ? ' checked' : '') }} class="form-check-input" id="{{$adorno->name}}" name="products[]" type="checkbox" value="{{$adorno->id}}" data-price="{{number_format($adorno->price, 2)}}" onclick="totalIt()">
                                        <label class="form-check-label" for="{{$adorno->name}}">{{$adorno->name}}</label>
                                    </div>
                                    @error('products')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @empty
                                        <p>Adornos agotados</p>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="description">Descripción del pedido</label>
                                    <textarea type="text" id="description" name="description" rows="5" placeholder="Descripción"
                                        class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="total">Total del pedido</label>
                                    <input type="total" name="total" id="total" placeholder="Total"
                                        class="form-control @error('total') is-invalid @enderror" readonly value="{{old('total')}}">
                                    @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="text-center">Contacta con nosotros</h2>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <p>Puedes enviarnos un mensaje y con gusto lo responderemos.</p>
                    <p><span class="icon"><i class="fas fa-address-card"></i></span> Direccion: Calle Pasteleria
                        Numero 120 Colonia Pasteleria Monterrey Nuevo Leon México</p>
                    <p><span class="icon"><i class="fas fa-calendar"></i></span> Horario de atención: Lunes a
                        viernes 08:00am a 08:00pm</p>
                    <p><span class="icon"><i class="fas fa-phone"></i></span> Teléfono: 8183912893</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <p>2021 Pasteleria Monterrollo</p>
</footer>
@endsection
