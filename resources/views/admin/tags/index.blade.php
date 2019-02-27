@extends('layouts.dashboard')

@section('titulo')
	Etiquetas
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<div class="right">
					<a href="{{ route('tags.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				</div>
				<table class="responsive-table striped centered">
					<thead>
						<tr>
							<th>Etiqueta</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->name }}</td>
								<td width="10px">
									<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Editar</a>
								</td>
								<td width="10px">
									{{ Form::model($tag, ['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
										{{ Form::submit('Eliminar', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4'])}}
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $tags->links('pagination::default') }}
			</div>
			
		</div>
	</main>
@endsection