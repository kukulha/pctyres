@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center">
			<h2 class="grey-text text-darken-3">Lista de <span class="orange-text text-darken-3">Noticias</span></h2>
			<div class="row">
			@foreach($posts as $post)
				<div class="col m6 s12 card card-fixed z-depth-0">
					<div class="card-image">
						@if($post->file)
							<img src="{{ $post->file }}" class="responsive-img" alt="">
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