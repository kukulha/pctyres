@extends('layouts.app')

@section('seo')
    @section('titulo')
        Ponte en contacto con nosotros
    @endsection

    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Ponte en contacto con nosotros">
    <meta property="twitter:description" content="Ponte en contacto con nosotros">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.pctyres.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
	

    <!--SEO Facebook -->    
    <meta property="og:title" content="Ponte en contacto con nosotros">
    <meta property="og:description" content="Ponte en contacto con nosotros">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url()}} ">
    <meta property="og:image" content="http://pctyres.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
    
@endsection

@section('content')
	<main>
		<div class="fondo section">
			<div class="container center">
				<h3 class="grey-text text-darken-3 light"><span class="orange-text text-darken-3">Ponte en contacto</span> con nosotros</h3>
				<h3 class="grey-text text-darken-3 light">Te asesoramos con el profesionalismo que nos caracteriza</h3>
				<br>
				{{ Form::open(['route' => 'messages.store']) }}
					<div class="row">
						<div class="col m6 s12">
							<div class="input-field">
								{{ Form::label('name', 'Nombre') }}
								{{ Form::text('name', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('last_name', 'Apellido') }}
								{{ Form::text('last_name', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('email', 'Correo Electrónico') }}
								{{ Form::email('email', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('phone', 'Teléfono') }}
								{{ Form::text('phone', null) }}
							</div>
						</div>
						<div class="col m6 s12">
							<div class="input-field">
								{{ Form::label('city', 'Ciudad') }}
								{{ Form::text('city', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('company', 'Empresa') }}
								{{ Form::text('company', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('job', 'Puesto') }}
								{{ Form::text('job', null) }}
							</div>
							<div class="input-field">
								{{ Form::label('body', 'Mensaje') }}
								{{ Form::textarea('body', null, ['class' => 'materialize-textarea']) }}
							</div>
						</div>
					</div>
					<div class="center">
						{{ Form::submit('enviar', ['class' => 'btn orange darken-3']) }}
					</div>
				{{ Form::close() }}
			</div>
		</div>

		<div class="fondo4 section">
			<div class="container">
				<div class="row">
					<div class="valign-wrapper">
						<div class="col m6 s12 right-align">
							<h2 class="white-text light">Solicita</h2>
							<h3 class="orange-text text-darken-3 light">Revisión de Flotas</h3>
							<div class="divider orange darken-3"></div>
							<p class="white-text light">Respalda tu negocio con un asesoramiento profesional, <br>cuida la salud de tus llantas.</p>
							<br>
							<br>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</main>
@endsection