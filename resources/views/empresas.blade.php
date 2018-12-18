@extends('layouts.app')
@section('page-title')
<title>Servicios para Empresas - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/empresas-hero.jpg')}}')">
    <img src="{{ asset('/icons/icono_empresas.png') }}" class="animated fadeIn ultra-slow">
    <h1 class="animated fadeIn ultra-slow">Soluciones para Empresas</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr">
    <h2 class="animated fadeIn slow">No deje que las plagas<br> tomen el control de su negocio</h2>
    <p class="animated fadeIn slow present-text">Entendemos lo importante de trabajar en un espacio limpio y controlado de plagas. Saga Service, miembro ACHICPLA. Te asesoramos y certificamos tu negocio.</p>

    <div class="items items-empresas chocolat-cover" data-aos="fade-up">
      {{-- <a class="chocolat-image" href="{{ asset('/lightbox/1.jpg') }}">EnlaceEnlaceEnlaceEnlaceEnlaceEnlace</a> --}}
      <div class="item item-1 chocolat-experiencia">
        <div class="chocolat-image">
          <img src="{{ asset('/icons/icono_experiencia.png') }}">
          <h3 class="card-title">Experiencia y<br>Especialización</h3>
          <p>Equipo técnico especialistas en el control de plagas. Nuestra constante capacitación a nuestro grupo humano, garantiza resultados eficientes.</p>
        </div>
      </div>
      <div class="item item-2 chocolat-evaluacion">
        <div class="chocolat-image">
          <img src="{{ asset('/icons/icono_evaluacion.png') }}">
          <h3 class="card-title">Evaluación en<br>Terreno</h3>
          <p>Visita técnica para evaluar y asesorar en terreno sus necesidades.</p>
        </div>
      </div>
      <div class="item item-3 chocolat-seguimiento">
        <div class="chocolat-image">
          <img src="{{ asset('/icons/icono_seguimiento.png') }}">
          <h3 class="card-title">Seguimiento y<br> Retroalimentación</h3>
          <p>Nuestro compromiso es mantener a nuestros clientes informados, a través de monitoreo constante de nuestros servicios en terreno.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Servicios --}}
  {{-- <section class="servicios pd-lr">
    <h2 class="color-blue present-title" data-aos="fade-in" data-aos-duration="400">Una variedad de soluciones<br> para cada necesidad</h2>
    <div class="items">
      <div class="item" data-aos="fade-up" data-aos-duration="400">
        <a href="{{url('/servicios/empresas/desratizacion')}}">
          <img src="{{ asset('/icons/servicios_desratizacion.png') }}">
          <h5>Desratización</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="600">
        <a href="{{url('/servicios/empresas/sanitizacion')}}">
          <img src="{{ asset('/icons/servicios_sanitizacion.png') }}">
          <h5>Sanitización</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="800">
        <a href="{{url('/servicios/empresas/desinsectacion')}}">
          <img src="{{ asset('/icons/servicios_desinsectacion.png') }}">
          <h5>Desinsectación</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="1000">
        <a href="{{url('/servicios/empresas/otras-plagas')}}">
          <img src="{{ asset('/icons/servicios_otras-plagas.png') }}">
          <h5>Otras Plagas</h5>
        </a>
      </div>
      <div class="item" data-aos="fade-up" data-aos-duration="1200">
        <a href="{{url('/servicios/empresas/ornamentacion')}}">
          <img src="{{ asset('/icons/servicios_ornamental.png') }}">
          <h5>Jardinería</h5>
        </a>
      </div>
    </div>
  </section> --}}

   @include('servicios',['page' => 'empresas'])

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

  {{-- CTA Visita --}}
  <section class="cta-visita background-blue">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta-empresas.jpg') }}')"></div>
  </section>
@endsection
