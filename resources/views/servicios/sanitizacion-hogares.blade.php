@extends('layouts.app')
@section('page-title')
<title>Sanitización - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-sanitizacion.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/title_sanitizacion.png') }}">
    <h1 class="animated fadeIn ultra-slow">Sanitización</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr">
    <h2 class="animated fadeIn slow">El enemigo invisible</h2>
    <p class="present-text animated fadeIn slow">Eliminamos microorganismos como bacterias, hongos, levaduras y virus, que contaminan y producen enfermedades infecto-contagiosas ubicados en utensilios, servicios higiénicos, duchas, camarines, saunas, comedores, cocinas y loockers.</p>

    <div class="present-why present-why-servicios" data-aos="fade-up">
      <div class="img" style="background-image: url('/img/servicios_sanitizacion.jpg')"></div>
      <div class="data background-gray">
        <h3>¿Porqué es Importante?</h3>
        <p>La multiplicación y reproducción de los microorganismos se produce a gran escala siendo capaces de sobrevivir a diversos medio ambientes. Su transmisión es muy fácil y puede producirse al contacto con las superficies infectadas o de persona a persona, dejándonos propensos a enfermedades contagiosas.</p>
        <h3>Beneficios</h3>
        <p>Reducir olores desagradables, prevenir infecciones por desechos u otros microorganismos, reducir bacterias que producen mal olor, prevenir el contagio de virus como el HIV-1 (Sida), adenovirus tipo IV, influenza, reovirus, herpes simplex tipo I y II, prevenir hongos como el Trychophyton mentagrophytes (pie de atleta), Candida albicans, Aspergillus niger, entre otros.</p>
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

      @include('servicios',['page' => 'hogares'])

  {{-- CTA Visita --}}
  <section class="cta-visita background-blue">
    <div class="item-data" data-aos="fade-in" data-aos-duration="800">
      <h2>Confié en nosotros,<br> Solicite una Visita</h2>
      <p>Un profesional calificado hará un diagnóstico y le ofrecerá la mejor solución de acuerdo a sus necesidades.</p>
      <a class="cta-button cta-button-visita background-white color-blue" href="{{url('/contacto')}}">Solicite aquí</a>
    </div>
    <div class="item-img" style="background-image: url('{{ asset('/img/cta-sanitizacion.jpg') }}')"></div>
  </section>
@endsection
