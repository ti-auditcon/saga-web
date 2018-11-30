@extends('layouts.app')
@section('page-title')
<title>SAGA Service - PEST CONTROL</title>
@endsection

@section('content')
  {{-- Hero --}}
  <section class="hero pd-lr">
    <video autoplay muted loop id="heroVideo" poster="{{ asset('/img/back-hero-index30.jpg')}}">
      <source class="sourceVideo" src="{{ asset('/img/hero.mp4')}}" type="video/mp4">
    </video>
    <h1 class="hero-title animated fadeIn ultra-slow">Controla tus plagas de manera limpia, segura y profesional</h1>
    <p class="animated fadeIn ultra-slow">Más de 20 años de experiencia nos avalan. La cercanía con nuestros clientes y trabajos garantizados nos identifican como líderes en el control fitosanitario de empresas y hogares en el centro-sur de Chile</p>
    <a class="cta-button cta-button-hero button-color-blue color-white animated fadeIn ultra-slow" href="#">Saber más</a>
  </section>

  {{-- Clientes --}}
  <section class="clientes pd-lr" id="clientes">
    <p data-aos="fade-in">Conozca nuestros servicios</p>
    <div class="items" data-aos="fade-up">
      <a href="{{url('/empresas')}}">
        <div class="item" style="background-image: url('../img/para_empresas.jpg');">
          <img src="{{ asset('/icons/icono_empresas.png') }}">
          <h2>Para Empresas</h2>
        </div>
      </a>
      <a href="{{url('/hogares')}}">
        <div class="item" style="background-image: url('../img/para_hogares.jpg')">
          <img src="{{ asset('/icons/icono_hogares.png') }}">
          <h2>Para Hogares</h2>
        </div>
      </a>
    </div>
  </section>

  {{-- Servicios --}}
  <section class="servicios pd-lr">
    <h2 class="color-blue present-title" data-aos="fade-in" data-aos-duration="400">Una variedad de soluciones<br> para cada necesidad</h2>
    <div class="items">
      <div class="item" data-aos="fade-up" data-aos-duration="400">
        <a href="{{url('/servicios/desratizacion')}}">
          <img src="{{ asset('/icons/servicios_desratizacion.png') }}">
          <h5>Desratización</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="600">
        <a href="{{url('/servicios/sanitizacion')}}">
          <img src="{{ asset('/icons/servicios_sanitizacion.png') }}">
          <h5>Sanitización</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="800">
        <a href="{{url('/servicios/desinsectacion')}}">
          <img src="{{ asset('/icons/servicios_desinsectacion.png') }}">
          <h5>Desinsectación</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="1000">
        <a href="{{url('/servicios/otras-plagas')}}">
          <img src="{{ asset('/icons/servicios_otras-plagas.png') }}">
          <h5>Otras Plagas</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="1200">
        <a href="{{url('/servicios/ornamentacion')}}">
          <img src="{{ asset('/icons/servicios_ornamental.png') }}">
          <h5>Jardinería</h5>
        </a>
      </div>
    </div>
  </section>

  {{-- Marcas --}}
  <section class="marcas pd-lr background-lightGray">
    <h2 class="present-title" data-aos="fade-in" data-aos-duration="400">Grandes marcas respaldan nuestro profesionalismo</h2>
    <div class="items" data-aos="fade-in" data-aos-duration="800">
      <img class="item" src="{{ asset('/icons/marcas_chv.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_arauco.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_montes.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_dole.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_copefrut.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_david.png') }}">
      <img class="item" src="{{ asset('/icons/marcas_puertas.png') }}">
    </div>
  </section>
@endsection
