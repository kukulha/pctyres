@extends('layouts.app')

@section('content')
<main>
	<div class="hero2 section">
            <div class="row ">
                <div class="valign-wrapper">
                	<div class="col m6 s12 pull-m4">
                        <h3 class="white-text light">Tu camión <br><span class="orange-text text-darken-3">se merece lo mejor</span></h3>
                        <h5 class="light white-text title">somos garantía de calidad</h5>
                    </div>
                </div>
            </div>
    </div>

	<div class="row container center section">
	@foreach($tires as $tire)
	
		<div class="col m4 s12">
			<div class="card">
					<div class="card-image">
						<a href="{{ $tire->data}}" data-fancybox="camion" data-title="{{ $tire->name }}" data-alt="{{ $tire->name }}"><img src="{{ $tire->file }}" alt=""></a>
					</div>

					<div class="card-content grey darken-3">
						<span class="card-title orange-text text-darken-3 bold">{{ $tire->name }}</span>
						<p class="white-text light">{{ $tire->excerpt }}</p>
						<div class="divider orange darken-3"></div>
						<br>
						<img src="{{ $tire->brand }}" class="responsive-img" alt="">
					</div>
			</div>
		</div>
	
	@endforeach
		
	</div>
	<div class="center">
		{{ $tires->links('pagination::default')}}
	</div>

	<section class="section">
		<div class="container">
			<h3 class="grey-text text-darken-3 light center">Marca <span class="orange-text text-darken-3">Premium</span></h3>
			<div class="row section">
				<div class="col m6 s12">
					<img src="/img/double-coin.png" class="responsive-img" alt="">
				</div>
				<div class="col m6 s12">
					<img src="/img/sierra.png" class="responsive-img" alt="">
				</div>
			</div>
			<div class="row section">
				<div class="col m8 s12">
					<h3 class="grey-text text-darken-3">Invertir en <img src="/img/iso.png" class="responsive-img" alt=""></h3>
					<h4 class="orange-text text-darken-3 light title">es un negocio inteligente</h4>
					<li class="divider orange darken-3"></li>
					<h5 class="grey-text text-darken-3">Utilizamos tecnología innovadora que mejora la eficiencia del combustible y reduce los gastos operativos.</h5>
				</div>
				<div class="col m4 s12">
					<img src="/img/llantas2.png" class="responsive-img" alt="">
				</div>
			</div>
		</div>
	</section>
</main>
@endsection
