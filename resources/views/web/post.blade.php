@extends('layouts.app')

@section('content')
	<main class="container">
		<h2 class="grey-text text-darken-3">{{ $post->name}}</h2>
		<div class="row">
			<div class="col s12">
				<div class="card z-depth-0">
					<div class="card-image">
						<img src="{{ $post->file }}" alt="">
					</div>
					<div class="card-content">
						<span class="card-title">{{ $post->name }}</span>
						<p class="small grey-text text-darken-3">Autor: <span class="orange-text text-darken-3">{{ $post->user->name }}</span></p>
						<p class="small grey-text text-darken-3">Fecha: <span class="orange-text text-darken-3">{{ $post->created_at }}</span></p>
						<p class="grey-text text-darken-3">{!! $post->body !!}</p>						
					</div>
					<div class="card-action">
						<p class="small grey-text text-darken-3">Categoria :
							<a href="{{ route('category', $post->category->slug) }}" class="orange-text text-darken-3">{{ $post->category->name }}</a>
						</p>
						<p class="small grey-text text-darken-3">Etiquetas :
							@foreach($post->tags as  $tag)
							<a href="{{ route('tag', $tag->slug) }}" class="orange-text text-darken-3">{{ $tag->name}}</a>
							@endforeach
						</p>
					</div>
					@if($related->isEmpty())
   						<h4 class="grey-text text-darken-3">No hay articulos relacionados</h4>
					@else
						<div class="section-title">
							<div class="row center">
						    	<h4 class="grey-text text-darken-3">Articulos relacionados</h4>
						    	@foreach($related as $post)
									<div class="col m4 s12">
										<div class="card card-fixed z-depth-0">
											<div class="card-image">
												<img src="{{ $post->file }}">
											</div>
	        								<div class="card-content">
						          				<p class="grey-text text-darken-2 justify">{{ $post->excerpt }}</p>
						        			</div>
						        			<div class="card-action">
						        				<a href="{{ route('post', $post->slug) }}">{{ $post->name }}</a>
						        			</div>
						        		</div>
									</div>
						    	@endforeach
						    </div>
						</div>
					@endif

				</div>
			</div>
		</div>
	</main>
@endsection