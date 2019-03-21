<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!--SEO Organico -->  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('titulo')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="www.kukulha.com">
    <meta name="designer" content="www.kukulha.com">
    <!-- GOOGLE SEO -->    
    <meta name="robots" content="index,follow" />
    <meta name="geo.region" content="MX" />

    @yield('seo')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Signika:200,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="social hide-on-med-and-down">
        <ul>
            <li><a href="https://www.facebook.com/pctyresmexico/?__tn__=%2Cd%2CP-R&eid=ARCup-OKWGW3JmMNh6kLwUet3IDpdJqw3puK3zq87t84QbTx_nAaEw8ZIshfummDimceoSN5r1-Q-ho9" class="icon-facebook" target="_blank"><i class="fab fa-facebook-f white-text"></i></a></li>
            <li><a href="https://www.instagram.com/pctyres/" class="icon-instagram" target="_blank"><i class="fab fa-instagram white-text"></i></a></li>
        </ul>
    </div>
    
    <div class="navbar-fixed">
        <nav class="white nav-extended">
            <hr class="grey darken-3">
            <div class="nav-wrapper container">
                <a href="{{ route('home')}}" class="brand-logo" itemprop="logo"><img src="/img/logo.png" class="responsive-img" alt=""></a>
                <a href="" class="sidenav-trigger right grey-text text-darken-3" data-target="movil"><i class="material-icons">menu</i></a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home right"></i>PC Tyres</a></li>
                    <li><a href="{{ route('messages.create') }}"><i class="fas fa-envelope right"></i>Contacto</a></li>
                    <li><a href="{{ route('posts') }}"><i class="fas fa-newspaper right"></i>Blog</a></li>
                    @auth
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="dropdown">
                            <i class="fas fa-user right"></i>{{ Auth::user()->name }}
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
            <div class="nav-content container">
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{ route('tires.camion') }}"><i class="fas fa-truck-moving right"></i>Llantas de Camión </a></li>
                    <li><a href="{{ route('tires.agricola') }}"><i class="fas fa-tractor right"></i>Llantas de Agricolas e Industriales</a></li>
                    <li><a href=""><i class="fas fa-truck right"></i>7.50 R17 Double Coin</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul id='dropdown' class='dropdown-content'>
        <li><a href="{{ route('admin') }}"><i class="material-icons left">bookmark_border</i>Administración</a>
        <li class="divider orange darken-3"></li>
        <li>
            <a href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">close</i>{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <ul id='movil' class='sidenav'>
        <li><a class="grey-text text-darken-3" href="{{ route('home') }}">PC Tyres</a></li>
        <li><a class="grey-text text-darken-3" href="{{ route('tires.camion') }}">Llantas de Camión </a></li>
        <li><a class="grey-text text-darken-3" href="{{ route('tires.agricola') }}">Llantas de Agricolas e Industriales</a></li>
        <li><a class="grey-text text-darken-3" href="">7.50 R17 Double Coin</a></li>
        <li><a class="grey-text text-darken-3" href="{{ route('messages.create') }}">Contacto</a></li>
        <li><a class="grey-text text-darken-3" href="{{ route('posts') }}">Blog</a></li>
    </ul>
    <br>

    @if(session('info'))
        <div class="center">
            <div class="green lighten-5 section ">
                <p class="green-text text-darken-5">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <div class="mt-4">
    @yield('content')
    </div>

    <footer class="page-footer grey darken-3 overflow z-depth-2">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col m4 s12 hide-on-med-and-down">
                    <ul>
                        <li><a class="white-text" href="{{ route('home') }}">PC Tyres</a></li>
                        <li><a class="white-text" href="{{ route('tires.camion') }}">Llantas de Camión </a></li>
                        <li><a class="white-text" href="{{ route('tires.agricola') }}">Llantas de Agricolas e Industriales</a></li>
                        <li><a class="white-text" href="">7.50 R17 Double Coin</a></li>
                        <li><a class="white-text" href="{{ route('messages.create') }}">Contacto</a></li>
                        <li><a class="white-text" href="{{ route('posts') }}">Blog</a></li>
                        <li><a class="white-text" href="{{ route('aviso') }}">Aviso de Privacidad</a></li>
                    </ul>
                </div>
                <div class="col m4 s12 center">
                    <img src="/img/logo-bco2.png" class="responsive-img" alt="">
                    <p class="white-text">PC Tyres S.A. de C.V. <br>Blvd. Anacleto González Flores Sur #660 <br>Teléfono: (378) 701 49 02 <br>Tepatitlán de Morelos, Jalisco <br>CP 47600 Colonia Centro</p>
                </div>
                <div class="col m4 s12 right-align hide-on-med-and-down">
                    <p class="orange-text text-darken-3">Sucursales:</p>
                    <p class="white-text light">Ameca, Jalisco<br>375 755 9305 / 755 9291</p>
                    <p class="white-text light">Guadalajara, Jalisco<br>331 728 0502</p>
                    <p class="white-text light">León, Guanajuato<br>477 194 4851</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

</body>
</html>
