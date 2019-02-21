<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="www.kukulha.com">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Signika:200,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2-master/dist/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="navbar-fixed">
        <nav class="white nav-extended">
            <hr class="grey darken-3">
            <div class="nav-wrapper container">
                <a href="{{ route('home')}}" class="brand-logo"><img src="/img/logo.png" class="responsive-img" alt=""></a>
                <a href="" class="sidenav-trigger right grey-text text-darken-3" data-target="movil"><i class="material-icons">menu</i></a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{ route('home') }}">PC Tyres</a></li>
                    <li><a href="#" class="dropdown-trigger" data-target="dropdown2">Llantas <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="{{ route('messages.create') }}">Contacto</a></li>
                    <li><a href="{{ route('posts') }}">Blog</a></li>
                    @auth
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="dropdown">
                            {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    @endauth
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

    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route('tires.camion') }}">Llantas de Camión </a></li>
        <li><a href="{{ route('tires.agricola') }}">Llantas de Agricolas e Industriales</a></li>
        <li><a href="">7.50 R17 Double Coin</a></li>
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
    @yield('content')

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

    @yield('scripts')
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

</body>
</html>
