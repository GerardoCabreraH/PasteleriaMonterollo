@extends('layouts.template')

@section('title', 'Pastelería Monterrollo | Inicio de sesión')

@section('class', 'login')

@section('content')
    <main>
        <section id="login" class="section-dark h-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 d-flex justify-content-center align-content-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-12 text-center">
                                        <img src="{{asset('assets/img/Pasteleria Monterrollo-Fondo Blanco.png')}}"
                                            alt="logo-monterrollo" class="img-fluid img-login">
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <h1 class="text-center">Login</h1>
                                        <h2 class="text-center">Si eres pastelero que trabaja con nosotros, favor de iniciar sesión</h2>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Contraseña</label>
                                                <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''
                                                        }}>
                                                    <label class="form-check-label" for="remember">
                                                        Recuerdame
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">Enviar</button>
                                            </div>
                                        </form>
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
