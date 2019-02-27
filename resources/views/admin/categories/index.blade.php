@extends('layouts.dashboard')

@section('titulo')
	Categorias
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<div class="right">
					<a href="{{ route('categories.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				</div>
				<table class="responsive-table striped centered">
					<thead>
						<tr>
							<th>Categoria</th>
							<th>Descripción</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{ $category->name }}</td>
								<td>{{ $category->body }}</td>
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
			</div>
			{{ $categories->links('pagination::default') }}
		</div>
	</main>
@endsection