@extends('layouts.dashboard')

@section('titulo')
	Llantas
@endsection

@section('content')
	<main class="margin-l section">
		<div class="container">
			<div class="center">
				<div class="right">
					<a href="{{ route('tires.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				</div>
				<table class="responsive-table striped centered">
					<thead>
						<tr>
							<th>Modelo</th>
							<th>Tipo</th>
							<th>Categoria</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tires as $tire)
							<tr>
								<td>{{ $tire->name }}</td>
								<td>{{ $tire->excerpt }}</td>
								<td>{{ $tire->category }}</td>
								<td width="10px">
									<a href="{{ route('tires.edit', $tire->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Editar</a>
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
			</div>
			<div class="center">
				{{ $tires->links('pagination::default') }}
			</div>
			
		</div>
	</main>
@endsection