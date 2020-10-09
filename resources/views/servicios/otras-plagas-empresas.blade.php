@extends('layouts.app')
@section('page-title')
<title>Otras Plagas: Control de palomas y murciélagos - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img_otras-plagas.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/title_otras-plagas.png') }}">
    <h1 class="animated fadeIn ultra-slow">Otras Plagas</h1>
  </section>

  {{-- present --}}
  <section class="present pd-lr">
    <h2 class="animated fadeIn slow">Control de Miscelaneos</h2>
    <p class="present-text animated fadeIn slow">Control de palomas y murciélagos, de acuerdo a normas, leyes y requerimientos sanitarios</p>

    <div class="present-why present-why-servicios" data-aos="fade-up">
      <div class="img" style="background-image: url('/img/servicios_otras-plagas.jpg')"></div>
      <div class="data background-charcoal">
        <h3>¿Porqué es importante?</h3>
        <p>Las palomas y los murciélagos transmiten enfermedades, sin embargo forman parte importante de la cadena biológica y del ecosistema (los murciélagos, por ejemplo, son buenos controladores de plagas), por lo que es necesario aplicar métodos de erradicación del lugar sobrepoblado de estos, sin eliminarlos.</p>
        <p>Controlamos estos vectores para evitar la trasmisión de enfermedades infecciosas así como el daño estructural y ambiental.</p>
      </div>
    </div>
  </section>

  {{-- Metodologia --}}
  <section class="metodologia">
    <h2 class="present-title color-greenUltraDark" data-aos="fade-in" data-aos-duration="800">¿Qué haremos por Usted?</h2>

    <div class="items pd-lr" data-aos="fade-in" data-aos-duration="800">
      <div class="item">
        <img src="{{ asset('/icons/icono_visita.png') }}">
        <div class="data">
          <h4>Paso 1: Contacto y fecha de visita</h4>
          <p>Nos dirigimos a donde el problema se encuentra. Junto a ud, acordamos la fecha más indicada para poder realizar una inspección del lugar</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_inspeccion.png') }}">
        <div class="data">
          <h4>Paso 2: Inspección del Lugar</h4>
          <p>Inspeccionaremos el lugar con el fin de elaborar un diagnóstico para detectar problemas de plagas actuales o potenciales</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_propuesta.png') }}">
        <div class="data">
          <h4>Paso 3: Diagnóstico y Propuesta</h4>
          <p>Una vez diagnosticado su problema le ofreceremos la mejor solución para eliminar la(s) plaga(s) y el presupuesto respectivo.</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_accion.png') }}">
        <div class="data">
          <h4>Paso 4: Control</h4>
          <p>Implementación de plan de control y seguimiento especializado con nuestro equipo profesional.</p>
        </div>
      </div>
    </div>
  </section>

    @include('servicios',['page' => 'empresas'])

  {{-- CTA Visita --}}
  <section class="cta-visita background-blue">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta-otras-plagas2.jpg') }}')"></div>
  </section>
@endsection
