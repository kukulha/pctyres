@extends('layouts.app')

@section('seo')
    @section('titulo')
        Lista de Noticias
    @endsection

    <meta name="keywords" content="@foreach($posts as $post){{ $post->name }},@endforeach">
    <meta name="description" content="Conoce las ultimas noticias en custion de llantasost->excerpt }}">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Lista de Articulos">
    <meta property="twitter:description" content="Conoce las ultimas noticias en custion de llantas">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.pctyres.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
	

    <!--SEO Facebook -->    
    <meta property="og:title" content="Lista de Articulos">
    <meta property="og:description" content="Conoce las ultimas noticias en custion de llantas">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://pctyres.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
    
@endsection

@section('content')
	<main class="container">
		<div class="center">
			<h2 class="grey-text text-darken-3">Lista de <span class="orange-text text-darken-3">Noticias</span></h2>
			<div class="row">
			@foreach($posts as $post)
				<div class="col m6 s12 card card-fixed z-depth-0">
					<div class="card-image">
						@if($post->file)
							<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
						@endif
					</div>
					<div class="card-content">
						<p class="grey-text text darken-3 justify">{{ $post->excerpt }}</p>						
					</div>
					<div class="card-action">
						<a href="{{ route('post', $post->slug) }}">{{ $post->name}}</a>
					</div>
				</div>
			@endforeach
			</div>
			{{ $posts->links('pagination::default') }}
		</div>

		
	</main>
@endsection