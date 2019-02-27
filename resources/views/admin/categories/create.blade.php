@extends('layouts.dashboard')

@section('titulo')
	Crear nueva categoria
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::open(['route' => 'categories.store']) }}
					
					@include('admin.categories.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection