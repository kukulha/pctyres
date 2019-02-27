@extends('layouts.dashboard')

@section('titulo')
	Crear nueva Etiqueta
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::open(['route' => 'tags.store']) }}
					
					@include('admin.tags.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection