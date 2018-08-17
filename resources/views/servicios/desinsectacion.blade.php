@extends('layouts.app')
@section('page-title')
<title>Desinsectación - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img_desinsectacion.jpg')}}')">
    <img src="{{ asset('/icons/title_desinsectacion.png') }}">
    <h1>Desinsectación</h1>
  </section>

  {{-- Present --}}
  <section class="present pd-lr background-blue">
    <h2>Fumigación de insectos</h2>
    <p class="present-text">Identificamos el o los insectos a controlar y actuamos sobre su superficie de trayectoris, nidos, sectores de alimentación y reproductivos para aplicar una fumigación eficaz que acabe con ellos.</p>

    <div class="present-why present-why-servicios">
      <div class="img"></div>
      <div class="data background-gray">
        <h3>¿Porqué es importante?</h3>
        <p>Este texto debería explicar como actua la desinsectación que ofrece SAGA Service en la desratización.</p>
        <p>Pellentesque semper maximus sem ac ultrices. Curabitur pulvinar massa in tincidunt pulvinar. Praesent hendrerit cursus est, et pellentesque nunc commodo a. Sed consequat leo quis ante viverra venenatis. Nam mattis ligula non ipsum lobortis vulputate.</p>
        <p>Vivamus id sem ac tortor feugiat volutpat. Vestibulum at sodales nibh. Vestibulum felis diam, consectetur id hendrerit at, sodales ac justo.</p>
      </div>
    </div>
  </section>

  {{-- Metodologia --}}
  <section class="metodologia">
    <h2 class="color-greenUltraDark">¿Qué haremos por Usted?</h2>

    <div class="items pd-lr">
      <div class="item">
        <img src="{{ asset('/icons/icono_visita.png') }}">
        <div class="data">
          <h4>Paso 1: Visita</h4>
          <p>Nos dirigimos a donde el problema se encuentra. Junto a ud, acordamos la fecha más indicada para poder realizar una inspección del lugar</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_inspeccion.png') }}">
        <div class="data">
          <h4>Paso 2: Inspección</h4>
          <p>Inspeccionaremos el lugar de arriba a abajo, por dentro y por fuera, para detectar problemas de plagas actuales o potenciales</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_propuesta.png') }}">
        <div class="data">
          <h4>Paso 3: Propuesta</h4>
          <p>Una vez inspeccionado le ofreceremos la mejor solución para acabar con la plaga y los resguardos necesarios para que no regrese.</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_accion.png') }}">
        <div class="data">
          <h4>Paso 4: Acción</h4>
          <p>Con implementos y tecnología especializada nuestro equipo eliminará la plaga del lugar.</p>
        </div>
      </div>
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
