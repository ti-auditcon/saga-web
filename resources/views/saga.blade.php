@extends('layouts.app')
@section('page-title')
<title>¿Porqué elegir SAGA? - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/para_empresas.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/saga_icon.png') }}">
    <h1 class="animated fadeIn ultra-slow">¿Porqué elegir SAGA?</h1>
  </section>

  {{-- Comp --}}
  <section class="comp pd-lr background-blue color-white">
    <h2 data-aos="fade-in" data-aos-duration="800">Nuestro compromiso está en hacer bien nuestro trabajo</h2>
    <div class="items" data-aos="fade-in" data-aos-duration="800">
      <div class="item">
        <img src="{{ asset('/icons/icono_calidad.png') }}">
        <h4>Enfoque en la Calidad</h4>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_satisfaccion.png') }}">
        <h4>Garantía de Satisfacción</h4>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_rapidez.png') }}">
        <h4>Rapidez de Servicio</h4>
      </div>
    </div>
  </section>

  {{-- Comp1 --}}
  <section class="comp_single pd-lr color-blue">
    <img src="{{ asset('/icons/icono_calidad_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Enfoque en la Calidad</h2>
    <p class="color-blue" data-aos="fade-in" data-aos-duration="800">Curabitur lectus neque, imperdiet vel quam consequat, tincidunt fringilla nisl. Nam gravida arcu tellus, vel condimentum nunc maximus eget. Vestibulum a justo sed lacus sodales aliquet. Nam congue convallis massa eu molestie</p>
  </section>

  {{-- Comp2 --}}
  <section class="comp_single pd-lr background-greenUltraDark color-white">
    <img src="{{ asset('/icons/icono_satisfaccion_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Garantía de Satisfacción</h2>
    <p class="color-white" data-aos="fade-in" data-aos-duration="800">Curabitur lectus neque, imperdiet vel quam consequat, tincidunt fringilla nisl. Nam gravida arcu tellus, vel condimentum nunc maximus eget. Vestibulum a justo sed lacus sodales aliquet. Nam congue convallis massa eu molestie</p>
  </section>

  {{-- Comp1 --}}
  <section class="comp_single pd-lr color-lightGray">
    <img src="{{ asset('/icons/icono_rapidez_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Respuesta Rápida</h2>
    <p class="color-gray" data-aos="fade-in" data-aos-duration="800">Curabitur lectus neque, imperdiet vel quam consequat, tincidunt fringilla nisl. Nam gravida arcu tellus, vel condimentum nunc maximus eget. Vestibulum a justo sed lacus sodales aliquet. Nam congue convallis massa eu molestie</p>
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

  {{-- CTA Visita --}}
  <section class="cta-visita background-blue">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta_hogares.jpg') }}')"></div>
  </section>
@endsection
