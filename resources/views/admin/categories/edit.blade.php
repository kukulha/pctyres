@extends('layouts.dashboard')

@section('titulo')
	Editar categoria
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::model($category,['route' => ['categories.update', $category->id], 'method' => 'PUT']) }}
					
					@include('admin.categories.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection