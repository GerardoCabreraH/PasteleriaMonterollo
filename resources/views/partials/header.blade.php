<header id="menu">
    <nav class="navbar navbar-expand-lg navbar-light navbarAdmin">
        <div class="container">
            <button type="button" id="navbarBrandAdmin" class="navbar-brand btn btn-link" onclick="showSidebar()"><i
                    class="fas fa-cogs"></i></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">{{Auth::user()->name}}</li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="sidebar" class="sidebarAdmin">
        <div class="sidebarLogo">
            <div class="row">
                <div class="col-12 col-sm-12 text-center">
                    <img src="{{asset('assets/img/Pasteleria Monterrollo-Fondo Blanco.png')}}" alt="logo-monterrollo"
                        class="img-fluid img-sidebar">
                    <p>Pasteleria Monterrollo</p>
                </div>
            </div>
        </div>
        <div class="sidebarContent">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex flex-column justify-content-center">
                    <ul>
                        <li>
                            <a href="{{ route('admin') }}">
                                <p><i class="fas fa-tachometer-alt"></i> Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}">
                                <p><i class="fas fa-box"></i> Sabores y Adornos</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.index') }}">
                                <p><i class="fas fa-list"></i> Pedidos</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">
                                <p><i class="fas fa-user"></i> Usuarios</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <p><i class="fas fa-sign-out-alt"></i> Cerrar sesión</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>
