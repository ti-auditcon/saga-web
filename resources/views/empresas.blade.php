@extends('layouts.app')
@section('page-title')
<title>Servicios para Empresas - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/para_empresas.jpg')}}')">
    <img src="{{ asset('/icons/icono_empresas.png') }}">
    <h1>Soluciones para Empresas</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr background-blue">
    <h2>No deje que las plagas<br> tomen el control de su negocio</h2>
    <p class="present-text">Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. </p>

    <div class="items items-empresas">
      <div class="item">
        <img src="{{ asset('/icons/icono_experiencia.png') }}">
        <h3 class="card-title">Experiencia y Especialización</h3>
        <p>Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. </p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_evaluacion.png') }}">
        <h3 class="card-title">Evaluación en Terreno</h3>
        <p>Un profesional calificado le asesorará completamente para ofrecerle el servicio adecuado para su necesidad.</p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_seguimiento.png') }}">
        <h3 class="card-title">Seguimiento y Retroalimentación</h3>
        <p>Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. </p>
      </div>
    </div>
  </section>

  {{-- Servicios --}}
  <section class="servicios pd-lr">
    <h2 class="color-blue present-title">Una variedad de soluciones<br> para cada necesidad</h2>
    <div class="items">
      <div class="item">
        <a href="{{url('/servicios/desratizacion')}}">
          <img src="{{ asset('/icons/servicios_desratizacion.png') }}">
          <h5>Desratización</h5>
        </a>
      </div>
      <div class="item">
        <a href="{{url('/servicios/sanitizacion')}}">
          <img src="{{ asset('/icons/servicios_sanitizacion.png') }}">
          <h5>Sanitización</h5>
        </a>
      </div>
      <div class="item">
        <a href="{{url('/servicios/desinsectacion')}}">
          <img src="{{ asset('/icons/servicios_desinsectacion.png') }}">
          <h5>Desinsectación</h5>
        </a>
      </div>
      <div class="item">
        <a href="{{url('/servicios/otras-plagas')}}">
          <img src="{{ asset('/icons/servicios_otras-plagas.png') }}">
          <h5>Otras Plagas</h5>
        </a>
      </div>
      <div class="item">
        <a href="{{url('/servicios/ornamentacion')}}">
          <img src="{{ asset('/icons/servicios_ornamental.png') }}">
          <h5>Ornamental</h5>
        </a>
      </div>
    </div>
  </section>

  {{-- Marcas --}}
  <section class="marcas pd-lr background-lightGray">
    <h2 class="present-title">Grandes marcas respaldan nuestro profesionalismo</h2>
    <div class="items">
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
  <section class="cta-visita">
    <div class="item-data background-blue">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="#">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta_hogares.jpg') }}')"></div>
  </section>
@endsection
