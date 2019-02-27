@extends('layouts.dashboard')

@section('titulo')
	Crear nueva Llanta
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::open(['route' => 'tires.store', 'files' => 'true']) }}
					
					@include('admin.tires.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection