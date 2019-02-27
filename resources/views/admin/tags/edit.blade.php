@extends('layouts.dashboard')

@section('titulo')
	Editar etiqueta
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::model($tag,['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}
					
					@include('admin.tags.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection