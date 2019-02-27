@extends('layouts.dashboard')

@section('titulo')
	Mensajes
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<table class="responsive-table striped centered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Fecha</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($messages as $message)
							<tr>
								<td>{{ $message->name }} {{ $message->last_name }}</td>
								<td>{{ $message->phone }}</td>
								<td>{{ $message->created_at }}</td>
								<td width="10px">
									<a href="{{ route('messages.show', $message->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Ver</a>
								</td>
								<td width="10px">
									{{ Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
										{{ Form::submit('Eliminar', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4'])}}
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $messages->links('pagination::default') }}
			</div>
			
		</div>
	</main>
@endsection