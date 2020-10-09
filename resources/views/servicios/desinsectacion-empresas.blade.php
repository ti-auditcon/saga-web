@extends('layouts.app')
@section('page-title')
<title>Desinsectación - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-desinsectacion.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/title_desinsectacion.png') }}">
    <h1 class="animated fadeIn ultra-slow">Desinsectación</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr">
    <h2 class="animated fadeIn slow">Control de insectos y arácnidos</h2>
    <p class="present-text animated fadeIn slow">Identificamos el tipo de insecto(s) a controlar y aplicamos el insecticida adecuado y específico para su eliminación del area comprometida aplicando una tecnología eficaz.</p>

    <div class="present-why present-why-servicios" data-aos="fade-up">
      <div class="img" style="background-image: url('/img/servicios_desinsectacion.jpg')"></div>
      <div class="data background-charcoal">
        <h3>¿Qué hacemos?</h3>
        <p>Controlamos plagas de insectos de características voladores (moscas, zancudos, polillas, mosquitos, avispas, etc), rastreros (hormigas, cucarachas, pulgas, tijeretas, termitas, coleopteros, etc) y arácnidos (arañas de rincón).</p>
        <h3>¿Porqué es Importante?</h3>
        <p>Existen insectos que además de ser molestos, transmiten enfermedades (como las cucarachas, las moscas, mosquitos, entre otros), así también hay insectos que atacan al ser humano (como las arañas de rincón, las avispas, las pulgas), destruyen estructuras, invaden los alimentos y las plantas. </p>
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
    <div class="item-img" style="background-image: url('{{ asset('/img/cta-desinsectacion.jpg') }}')"></div>
  </section>
@endsection
