<div class="fixed-top bg-white">
    <nav class="navbar navbar-expand-lg d-flex flex-column navbar-dark p-0" style="z-index: 20;">
        <div class="w-100" style="background-color: #2E3947">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="m-0 text-white">Seguinos en</p>
                        <a href="{{ $redes->text['es']['facebook'] ?? '' }}" class="pl-2"><i class="fab fa-facebook-square" style="color: #CCCCCC"></i></a>
                        <a href="{{ $redes->text['es']['youtube'] ?? '' }}" class="px-3"><i class="fab fa-youtube" style="color: #CCCCCC"></i></a>
                        <span class="d-none d-sm-block border-left">
                            <i class="far fa-envelope mx-2" style="color: #D33538;"></i>
                            <a href="mailto:{{ $contacto->text['es']['correo'] ?? '' }}" class="text-white">{{ $contacto->text['es']['correo'] ?? '' }}</a>
                        </span>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <form action="{{ route('buscador') }}" method="get" class="form-inline">
                            <div class="input-group my-1">
                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Estoy buscando..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-search" style="color: #D33538;" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </form>

                        <div class="dropdown">
                            <button style="font-size: 15px" class="btn btn-sm m-0 p-0 ml-2 text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ App::getLocale() }}
                            </button>
                            <div class="dropdown-menu m-0 py-0 dropdown-menu-right" style="min-width: 2rem;" aria-labelledby="dropdownMenuButton">
                                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                                    <a class="dropdown-item m-0 p-0 {{ LaravelLocalization::getCurrentLocale()==$key?'active':'' }}" href="{{ LaravelLocalization::getLocalizedURL($key) }}">{{ ucwords($key) }}</a>
                                @endforeach
                            </div>
                        </div>
                        {{--<form class="form-inline form-group">--}}
                        {{--<input class="form-control form-control-sm " type="text" placeholder="Estoy buscando..."--}}
                                   {{--aria-label="Search">--}}
                            {{--<i class="fas fa-search" style="color: #D33538;" aria-hidden="true"></i>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: #ffffff">
            <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse flex-md-column" id="navbarNav">
                <ul class="navbar-nav m-auto d-flex align-items-center">
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('/') ? 'activo' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('nosotros') ? 'activo' : '' }} " href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('productos*') ? 'activo' : '' }} {{ request()->is('marcas*') ? 'activo' : '' }} {{ request()->is('modelos*') ? 'activo' : '' }} {{ request()->is('serie*') ? 'activo' : '' }} {{ request()->is('producto*') ? 'activo' : '' }}" href="{{ route('familias') }}">Productos</a></li>
                    <a class="navbar-brand ml-3" href="{{ url('/') }}"><img src="{{ asset($logos[1]['image']) }}" alt="" class="img-fluid"></a>
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('novedades') ? 'activo' : '' }} " href="{{ route('noticias') }}">Novedades</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('calidad') ? 'activo' : '' }} " href="{{ route('calidad') }}">Calidad</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ml-2 {{ request()->is('contacto') ? 'activo' : '' }} " href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>