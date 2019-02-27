@extends('layouts.dashboard')

@section('titulo')
	Mensaje {{ $message->name }} {{ $message->last_name }}
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<table class="striped centered">
					<tbody>
							<tr>
								<th>Nombre</th>
								<td>{{ $message->name }} {{ $message->last_name }}</td>
							</tr>
							<tr>
								<th>Correo Electrónico</th>
								<td>{{ $message->email }}</td>
							</tr>
							<tr>
								<th>Teléfono</th>
								<td>{{ $message->phone }}</td>
							</tr>
							<tr>
								<th>Ciudad</th>
								<td>{{ $message->city }}</td>
							</tr>
							<tr>
								<th>Empresa</th>
								<td>{{ $message->company }}</td>
							</tr>
							<tr>
								<th>Puesto</th>
								<td>{{ $message->job }}</td>
							</tr>
							<tr>
								<th>Mensaje</th>
								<td>{{ $message->body }}</td>
							</tr>
					</tbody>
				</table>
			</div>
			<div class="center section">
				<a href="mailto:{{ $message->email }}" class="btn green lighten-5 green-text text-darken-4">Eviar Correo</a>
				<a href="tel:{{ $message->phone }}" class="btn teal lighten-5 teal-text text-darken-4 hide-on-large-only">Llamar</a>
			</div>
		</div>
	</main>
@endsection