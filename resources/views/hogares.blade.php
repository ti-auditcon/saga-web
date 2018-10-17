@extends('layouts.app')
@section('page-title')
<title>Servicios para Hogares - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/hogares-hero.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/icono_hogares.png') }}">
    <h1 class="animated fadeIn ultra-slow">Soluciones para Hogares</h1>
  </section>

  {{-- Present --}}
  <section class="present present-hogares pd-lr">
    <h2 class="animated fadeIn slow">El bienestar de su familia es lo<br> más importante</h2>
    <p class="present-text animated fadeIn slow">Un ambiente sano es un lugar libre de plagas. Confie en nuestra experiencia y liderazgo.</p>

    <div class="items items-hogares" data-aos="fade-up">
      <div class="item">
        <img src="{{ asset('/icons/icono_experiencia.png') }}">
        <h3 class="card-title">Equipo experto<br> y confiable</h3>
        <p>Personal capacitado en control de plagas, en constante formación para garantizar resultados eficientes.</p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_evaluacion.png') }}">
        <h3 class="card-title">Evaluación<br> Personalizada</h3>
        <p>Nuestro grupo profesional  lo asesorará y entregará el servicio adecuado a su necesidad.</p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_post-venta.png') }}">
        <h3 class="card-title">Seguimiento<br> Post Venta</h3>
        <p>Nuestro compromiso es mantener contacto permatente con el cliente post servicio.</p>
      </div>
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

  {{-- CTA Visita --}}
  <section class="cta-visita background-greenUltraDark">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-greenUltraDark" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta_hogares.jpg') }}')"></div>
  </section>
@endsection
