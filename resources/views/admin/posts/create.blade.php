@extends('layouts.dashboard')

@section('titulo')
	Crear nuevo Articulo
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::open(['route' => 'posts.store', 'files' => 'true']) }}
					
					@include('admin.posts.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection