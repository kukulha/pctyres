@extends('layouts.app')

@section('seo')
    @section('titulo')
        Llantas Agricolas e Industriales
    @endsection

    <meta name="keywords" content="@foreach($tires as $tire){{ $tire->name }},@endforeach">
    <meta name="description" content="Llantas Agricolas e Industriales">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Llantas Agricolas e Industriales">
    <meta property="twitter:description" content="Llantas Agricolas e Industriales">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.pctyres.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
	

    <!--SEO Facebook -->    
    <meta property="og:title" content="Llantas Agricolas e Industriales">
    <meta property="og:description" content="Llantas Agricolas e Industriales">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://pctyres.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
    
@endsection

@section('content')
<main>
	<div class="hero3 section">
            <div class="row ">
                <div class="valign-wrapper">
                	<div class="col m6 s12 right-align pull-m2">
                        <h4 class="white-text light">La mejor tierra <br>se merece las mejores</span></h3>
                        <h3 class="white-text title">llantas</h5>
                        <div class="margin-top">
                        	<h3 class="white-text bold">¡Somos los expertos!</h3>
                        	<a href="" class="btn orange darken-3 white-text">Mas información</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

	<div class="row container center">
	@foreach($tires as $tire)
	
		<div class="col m4 s12">
			<div class="card">
					<div class="card-image">
						<a href="{{ Storage::url($tire->data) }}" data-fancybox="camion" data-title="{{ $tire->name }}" data-alt="{{ $tire->name }}"><img src="{{ Storage::url($tire->file) }}" alt=""></a>
					</div>

					<div class="card-content grey darken-3">
						<span class="card-title orange-text text-darken-3 bold">{{ $tire->name }}</span>
						<p class="white-text light">{{ $tire->excerpt }}</p>
						<div class="divider orange darken-3"></div>
						<br>
						<img src="{{ Storage::url($tire->brand) }}" class="responsive-img" alt="">
					</div>
			</div>
		</div>
	
	@endforeach
		
	</div>
	<div class="center">
		{{ $tires->links('pagination::default')}}
	</div>
</main>
@endsection