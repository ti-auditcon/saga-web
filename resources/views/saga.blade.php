@extends('layouts.app')
@section('page-title')
<title>¿Porqué elegir SAGA? - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-porque-saga.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/saga_icon.png') }}">
    <h1 class="animated fadeIn ultra-slow">¿Porqué elegir SAGA?</h1>
  </section>

  {{-- Comp --}}
  <section class="comp pd-lr background-blue color-white">
    <h2 data-aos="fade-in" data-aos-duration="800">Nuestro compromiso es<br>realizar bien nuestro trabajo</h2>
    {{-- <div class="equipo-wrapper">
      <img src="../img/equipo.jpg" alt="Equipo Saga">
    </div> --}}
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

  {{-- Comp 1: Nuevo --}}
  {{-- <section class="comp_element">
    <div class="comp_img comp_calidad"></div>
    <div class="comp_text align-right">
      <div class="comp_text-inner">
        <img src="{{ asset('/icons/icono_calidad_big.png') }}" data-aos="fade-in" data-aos-duration="800">
        <h2 data-aos="fade-in" data-aos-duration="800" class="color-blue">Enfoque en la Calidad</h2>
        <p class="color-blue" data-aos="fade-in" data-aos-duration="800">
          La calidad de nuestros servicios está dada por el profesionalismo y constante capacitación de nuestro equipo técnico. El uso adecuado y la alta pureza de los ingredientes activos aplicados nos permite garantizar nuestra labor en terreno.
        </p>
      </div>
    </div>
  </section> --}}

  {{-- Comp1 --}}
  <section class="comp_single pd-lr color-blue comp-back-calidad" style="background-image: url('../img/saga_calidad.png')">
    <img src="{{ asset('/icons/icono_calidad_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Enfoque en la Calidad</h2>
    <p class="color-blue" data-aos="fade-in" data-aos-duration="800">
      La calidad de nuestros servicios está dada por el profesionalismo y constante capacitación de nuestro equipo técnico. El uso adecuado y la alta pureza de los ingredientes activos aplicados nos permite garantizar nuestra labor en terreno.
    </p>
  </section>

  {{-- Comp2 --}}
  <section class="comp_single pd-lr background-greenUltraDark color-white comp-back-satisfaccion" style="background-image: url('../img/saga_satisfaccion.png'); background-position: top;">
    <img src="{{ asset('/icons/icono_satisfaccion_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Garantía de Satisfacción</h2>
    <p class="color-white" data-aos="fade-in" data-aos-duration="800">
      Nuestro trabajo, realizado de manera eficiente, comprometida y profesional, con rápida acción de respuesta a los altos requerimientos de nuestros clientes, nos permite garantizar, satisfacer sus necesidades.
    </p>
  </section>

  {{-- Comp3 --}}
  <section class="comp_single pd-lr color-lightGray comp-back-rapidez" style="background-image: url('../img/saga_rapidez.png'); background-position: center;">
    <img src="{{ asset('/icons/icono_rapidez_big.png') }}" data-aos="fade-in" data-aos-duration="800">
    <h2 data-aos="fade-in" data-aos-duration="800">Respuesta Rápida</h2>
    <p class="color-gray" data-aos="fade-in" data-aos-duration="800">
      Porque sabemos que sus necesidades necesitan ser solucionadas lo antes posible y de manera efectiva. Nuestra logística y modo de acción nos permite poder entregar una respuesta rápida, ya sea a través de nuestras plataformas web, como visitas técnicas a domicilio. Más de 20 años nos avalan.
    </p>
  </section>

  {{-- Marcas --}}
  <section class="marcas pd-lr background-lightGray">
    <h2 class="present-title" data-aos="fade-in" data-aos-duration="400">
      Grandes marcas respaldan nuestro profesionalismo
    </h2>
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
    <div class="item-img" style="background-image: url('{{ asset('/img/cta_en-accion.jpg') }}')"></div>
  </section>
@endsection
