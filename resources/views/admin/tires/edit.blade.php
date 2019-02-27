@extends('layouts.dashboard')

@section('titulo')
	Editar Llanta
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center card-panel">
				{{ Form::model($tire,['route' => ['tires.update', $tire->id], 'method' => 'PUT', 'files' => 'true']) }}
					
					@include('admin.tires.partials.form')

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection