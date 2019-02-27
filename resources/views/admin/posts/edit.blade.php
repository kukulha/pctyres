@extends('layouts.dashboard')

@section('titulo')
	Editar Articulo
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::model($post,['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true']) }}
					
					@include('admin.posts.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection