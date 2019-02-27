@extends('layouts.dashboard')

@section('titulo')
	<h4 class="white-text">Hola {{ Auth::user()->name }}</h4>
@endsection

@section('subtitulo')
	<p class="orange-text text-darken-3">Bienvenido al panel de Administración</p>
@endsection

@section('content')
	<main class="margin-l">
		<div class="">
			

			
			<div class="row">
				<div class="col m6 s12">
					<div class="card large">
						<div class="card-content">
							<span class="card-title orange-text text-darken-3"><i class="material-icons left">chat</i>Ultimos Mensajes </span>
							<div class="right">
							<a href="{{ route('messages.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
						</div>
						<table class="striped">
							<thead>
								<tr>
									<th>Nombre</th>
									<th colspan="2">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($messages as $message)
									<tr>
										<td>{{ $message->name }}</td>
										<td width="10px">
									<a href="{{ route('messages.show', $message->id) }}" class="btn btn-small green lighten-5 green-text text-darken-4">ver</a>
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
						<a href="{{ route('messages.index') }}" class="btn teal lighten-5 teal-text text-darken-4">Ver todos</a>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="card large">
						<div class="card-content">
							<span class="card-title orange-text text-darken-3"><i class="material-icons left">bookmark_border</i>Ultimas Categorias</span>
							<div class="right">
							<a href="{{ route('categories.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
						</div>
						<table class="striped">
							<thead>
								<tr>
									<th>Categoria</th>
									<th colspan="2">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->name }}</td>
										<td width="10px">
									<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Editar</a>
								</td>
								<td width="10px">
									{{ Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
										{{ Form::submit('Eliminar', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4'])}}
									{{ Form::close() }}
								</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<a href="{{ route('categories.index') }}" class="btn teal lighten-5 teal-text text-darken-4">Ver todas</a>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="card large">
						<div class="card-content">
							<span class="card-title orange-text text-darken-3"><i class="material-icons left">assignment</i>Ultimas etiquetas</span>
							<div class="right">
							<a href="{{ route('tags.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
						</div>
						<table class="striped">
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
						<a href="{{ route('tags.index') }}" class="btn teal lighten-5 teal-text text-darken-4">Ver todas</a>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="card large">
						<div class="card-content">
							<span class="card-title orange-text text-darken-3"><i class="material-icons left">art_track</i>Ultimos Articulos</span>
							<div class="right">
							<a href="{{ route('posts.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
						</div>
						<table class="striped">
							<thead>
								<tr>
									<th>Titulo</td>
									<td colspan="2">Acciones</th>
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
						<a href="{{ route('posts.index') }}" class="btn teal lighten-5 teal-text text-darken-4">Ver todos</a>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="card large">
						<div class="card-content">
							<span class="card-title orange-text text-darken-3"><i class="material-icons left">data_usage</i>Ultimas Llantas</span>
							<div class="right">
							<a href="{{ route('tires.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
						</div>
						<table class="striped">
							<thead>
								<tr>
									<th>Modelo</th>
									<th colspan="2">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tires as $tire)
									<tr>
										<td>{{ $tire->name }}</td>
										<td width="10px">
									<a href="{{ route('tires.show', $tire->id) }}" class="btn btn-small green lighten-5 green-text text-darken-4">ver</a>
								</td>
								<td width="10px">
									{{ Form::model($tire, ['route' => ['tires.destroy', $tire->id], 'method' => 'DELETE']) }}
										{{ Form::submit('Eliminar', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4'])}}
									{{ Form::close() }}
								</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<a href="{{ route('tires.index') }}" class="btn teal lighten-5 teal-text text-darken-4">Ver todas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection