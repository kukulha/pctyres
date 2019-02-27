@extends('layouts.dashboard')

@section('titulo')
	Articulos
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<div class="right">
					<a href="{{ route('posts.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				</div>
				<table class="responsive-table striped">
					<thead class="center">
						<tr>
							<th>Titulo</th>

							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{{ $post->name }}</td>
								<td width="10px">
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Editar</a>
								</td>
								<td width="10px">
									{{ Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
										{{ Form::submit('Eliminar', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4'])}}
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $posts->links('pagination::default') }}
			</div>
			
		</div>
	</main>
@endsection