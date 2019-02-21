@extends('layouts.dashboard')

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<div class="right">
					<a href="" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				</div>
				<table class="responsive-table striped centered">
					<thead>
						<tr>
							<th>Categoria</th>
							<th>Descripción</th>
							<th colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{ $category->name }}</td>
								<td>{{ $category->body }}</td>
								<td width="10px">
									<a href="" class="btn btn-small orange lighten-5 orange-text text-darken-4">Editar</a>
								</td>
								<td width="10px">ver</td>
								<td width="10px">eliminar</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
			{{ $categories->links('pagination::default') }}
		</div>
	</main>
@endsection