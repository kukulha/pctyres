@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <h2 class="grey-text text-darken-3 center">Pasión <span class="orange-text text-darken-3">que nos distingue</span></h2>
    </div>

        <div class="hero section">
            <div class="row ">
                <div class="valign-wrapper">
                    <div class="col m6 s12 hide-on-med-and-down">
                        <img src="/img/llantas.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6 s12 center">
                        <h3 class="grey-text text-darken-3 ">Productos <span class="orange-text text-darken-3">Premium</span></h3>
                        <h4 class="light grey-text text-darken-3">para el trabajo diario</h4>
                        <a href="" class="btn orange darken-3">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="section fondo">
            <div class="container">
                <div class="row center">
                    <h3 class="grey-text text-darken-3 light">Las mejores llantas</h3>
                    <h4 class="orange-text text-darken-3">para tu trabajo</h4>
                    <div class="col m4 s12 roll">
                        <img src="/img/llantas2.png" class="responsive-img" alt="">
                        <h5 class="grey-text text-darken-3">Agricultor</h5>
                    </div>
                    <div class="col m4 s12 roll">
                        <img src="/img/llantas2.png" class="responsive-img" alt="">
                        <h5 class="grey-text text-darken-3">Constructor</h5>

                    </div>
                    <div class="col m4 s12 roll">
                        <img src="/img/llantas2.png" class="responsive-img" alt="">
                        <h5 class="grey-text text-darken-3">Camionero</h5>

                    </div>
                </div>
            </div>
        </section>

        <section class="section fondo2">
            <div class="container">
                <h3 class="grey-text text-darken-3 light">Nos especializamos <br><span class="orange-text text-darken-3">En llantas y equipos agrícolas</span></h3>
                <div class="fijo">
                    <div class="row">
                        <div class="col s12 m3">
                            <img src="/img/logo-bco.png" class="responsive-img" alt="">
                        </div>
                        <div class="col s12 m9 center">
                            <h4 class="white-text bold">Confiabilidad, Rendimiento Seguridad</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row section">
                    <div class="col m6 s12">
                        <img src="/img/llantas2.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6 s12 center">
                        <img src="/img/double-coin.png" class="responsive-img" alt="">
                        <h3 class="light grey-text text-darken-3">7 Años de <span class="orange-text text-darken-3">Garantía</span></h3>
                        <h5 class="light grey-text text-darken-3 title">3 servicios de renovado</h5>
                        <a href="" class="btn orange darken-3 white-text">Contactar</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="fondo3">
            <div class="row container">
                <div class="col m6 s12 center push-m6">
                    <h4 class="grey-text text-darken-3">Con una <span class="orange-text text-darken-3 title">buena llanta</span> podrás</h4>
                    <br><br><br>
                    <div class="row">
                        <div class="col s4">
                            <img src="/img/riesgo.png" class="responsive-img" alt="">
                            <h5 class="white-text">Reducir riesgo</h5>
                        </div>
                        <div class="col s4">
                            <img src="/img/rendimiento.png" class="responsive-img" alt="">
                            <h5 class="white-text">Mejorar rendimiento </h5>
                        </div>
                        <div class="col s4">
                            <img src="/img/costos.png" class="responsive-img" alt="">
                            <h5 class="white-text">Minimizar Costos</h5>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 n-margin pull-m6">
                    <img src="/img/llanta2.png" class="responsive-img" alt="">
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container center">
                <h3 class="grey-text text-darken-3 title light">Blog</h3>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col m6 s12">
                            <img src="{{ $post->file }}" class="responsive-img" alt="">
                            <p class="grey-text text-darken-3 justify">{{ $post->excerpt }}</p>
                            <a href="{{ route('post', $post->slug) }}" class="btn orange darken-3">Ver más</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container center">
                <h3 class="grey-text text-darken-3 light">Encuéntranos</h3>
                <div class="row">
                    <div class="col m3 s6">
                        <img src="/img/map-marker.png" class="responsive-img" alt="">
                        <p class="grey-text text-darken-3">Tepatitlán</p>
                    </div>
                    <div class="col m3 s6">
                        <img src="/img/map-marker.png" class="responsive-img" alt="">
                        <p class="grey-text text-darken-3">León</p>
                    </div>
                    <div class="col m3 s6">
                        <img src="/img/map-marker.png" class="responsive-img" alt="">
                        <p class="grey-text text-darken-3">Ameca</p>
                    </div>
                    <div class="col m3 s6">
                        <img src="/img/map-marker.png" class="responsive-img" alt="">
                        <p class="grey-text text-darken-3">Guadalajara</p>
                    </div>
                </div>
            </div>
        </section>
    
</main>
@endsection
