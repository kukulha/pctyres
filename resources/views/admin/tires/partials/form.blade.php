<section class="section">
	<div class="input-field">
		{{ Form::label('name', 'Modelo') }}
		{{ Form::text('name', null, ['id' => 'name']) }}
	</div>
	<div class="input-field">
		{{ Form::label('slug', 'URL Amigable') }}
		{{ Form::text('slug', null, ['id' => 'slug']) }}
	</div>
	<div class="input-field">
		{{ Form::label('excerpt', 'Tipo de Llanta') }}
		{{ Form::text('excerpt', null) }}
	</div>

	<div class="file-field field-input">
		<div class="btn btn-small red lighten-5 red-text text-darken-4">
			<span>Imagen</span>
			{{ Form::file('file', null) }}	
		</div>
		<div class="file-path-wrapper">
			{{ Form::text('file', null ,['class' => 'file-path'])}}
		</div>
	</div>

	<div class="file-field field-input">
		<div class="btn btn-small red lighten-5 red-text text-darken-4">
			<span>Marca</span>
			{{ Form::file('brand', null) }}	
		</div>
		<div class="file-path-wrapper">
			{{ Form::text('brand', null ,['class' => 'file-path'])}}
		</div>
	</div>

	<div class="file-field field-input">
		<div class="btn btn-small red lighten-5 red-text text-darken-4">
			<span>Ficha técnica</span>
			{{ Form::file('data', null) }}	
		</div>
		<div class="file-path-wrapper">
			{{ Form::text('data', null ,['class' => 'file-path'])}}
		</div>
	</div>

	<div class="row">
			<div class="col s12">
				{{ Form::label('category', 'Categoria') }}
				<br>
				<p style="display:inline">
					<label>
						{{ Form::radio('category', 'CAMION') }}
						<span>Camión</span>
					</label>
				</p>
				<p style="display:inline">
					<label>
						{{ Form::radio('category', 'AGRICOLA') }}
						<span>Agricola</span>
					</label>
				</p>
			</div>
		</div>

	<div class="input-field">
		{{ Form::submit('Guardar', ['class' => 'btn btn-small orange darken-3']) }}
	</div>
</section>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection