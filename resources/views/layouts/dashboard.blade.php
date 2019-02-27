<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="www.kukulha.com">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

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
	<nav class="grey darken-3 margin-l nav-extended">
		<div class="nav-wrapper">
			<div class="container ">
				<a href="" class="brand-logo">@yield('titulo')</a>
				<a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons orange-text text-darken-3">menu</i></a>
			</div>
		</div>
		<div class="nav-content">
			<div class="container mb-1 padding">
				@yield('subtitulo')
			</div>
		</div>
	</nav>	
	<ul id="slide-out" class="sidenav sidenav-fixed grey darken-3"> 
		<li>
			<div class="user-view">
      			<img src="/img/logo-bco.png" class="center responsive-img">
    		</div>
		</li>
		<li><div class="divider orange darken-3"></div></li>
		<li><a class="white-text" href="{{ route('home') }}">Ver pagina</a></li>
		<li><a class="white-text" href="{{ route('admin') }}">Administración</a></li>
		<li><div class="divider orange darken-3"></div></li>
		<li><a class="white-text" href="{{ route('messages.index') }}"><i class="material-icons right white-text">chat</i>Mensajes</a></li>
		<li><a class="white-text" href="{{ route('categories.index') }}"><i class="material-icons right white-text">bookmark_border</i>Categorias</a></li>
		<li><a class="white-text" href="{{ route('tags.index') }}"><i class="material-icons right white-text">assignment</i>Etiquetas</a></li>
		<li><a class="white-text" href="{{ route('posts.index') }}"><i class="material-icons right white-text">art_track</i>Articulos</a></li>
		<li><a class="white-text" href="{{ route('tires.index') }}"><i class="material-icons right white-text">data_usage</i>Llantas</a></li>
		<li><div class="divider orange darken-3"></div></li>
		<li><a class="white-text" href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<i class="material-icons right white-text">close</i>{{ __('Logout') }}</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		</li>
	</ul>
	
	{{-- Info --}}

	@if(session('info'))
		<div class="margin-l center">
			<div class="green lighten-5 section ">
				<p class="green-text text-darken-5">{{ session('info') }}</p>
			</div>
		</div>
	@endif

	@if(count($errors))
		<div class="margin-l center">
			<div class="red lighten-5 section ">
				<ul>
					@foreach($errors->all() as $error)
						<li class="red-text text-darken-5">{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif

	<div class="mt-3">
	@yield('content')
	</div>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
	@yield('scripts')

</body>
</html>