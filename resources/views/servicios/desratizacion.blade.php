@extends('layouts.app')
@section('page-title')
<title>Desratización - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-desratizacion.jpg')}}'); background-position: bottom;">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/title_desratizacion.png') }}">
    <h1 class="animated fadeIn ultra-slow">Desratizacion</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr">
    <h2 class="animated fadeIn slow">Control de Roedores</h2>
    <p class="present-text animated fadeIn slow">Los diferentes tipos de roedores domésticos invaden su hogar o empresa en busca de comida, agua y refugio. Son una amenaza constante para su salud, propiedad y seguridad.</p>
    {{-- <p class="present-text animated fadeIn slow">Las ratas, los ratones y otras plagas invaden su hogar en busca de las mismas comodidades del hogar que usted: comida, refugio y agua. Desafortunadamente, son más que un inconveniente. Son una amenaza para su propiedad, su salud y su sentido de seguridad.</p> --}}

    <div class="present-why present-why-servicios" data-aos="fade-up">
      <div class="img" style="background-image: url('/img/servicios_desratizacion1.jpg')"></div>
      <div class="data background-gray">
        <h3>¿Cómo lo hacemos?</h3>
        <p>Mediante la implementación de medidas culturales y cebaderas de control específicas, eliminamos esta plaga en busca de su protección sanitaria y económica</p>
        <h3>¿Porqué es Importante?</h3>
        <p>Conocidos por transmitir enfermedades infecto-contagiosas que pueden afectar su salud, es necesario realizar seguimientos periódicos con mayor énfasis en invierno y verano, ya que son las temporadas donde más se reproducen.</p>
        <p>Son persistentes y producen daños en el aislamiento de la casa, paredes e instalaciones eléctricas, pudiendo incluso provocar incendios por roer los cables.</p>
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

  {{-- CTA Visita --}}
  <section class="cta-visita background-blue">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>¿Víctima de alguna Plaga?<br> Solicite una visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta-desratizacion.jpg') }}')"></div>
  </section>
@endsection
