@extends('layouts.app')
@section('page-title')
<title>Mensaje enviado Exitosamente - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-contacto.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/saga_icon.png') }}">
    <h1 class="animated fadeIn ultra-slow">Nos contactaremos con usted en breve</h1>
  </section>

  <section class="enviado pd-lr">
    <h2 class="animated fadeIn slow">Gracias por Confiar en Nosotros</h2>
    <p>En SAGA Service estamos a su disposición con un equipo conocedor y comprometido con su trabajo.</p>
    <p>En breve nos contactaremos con usted para ofrecerle la mejor solución de acuerdo a sus necesidades.</p>
  </section>

  {{-- Dirección y Mapa --}}
  <section class="ubicacion background-lightGray">
    <div class="datos-direccion">
      <div class="item">
        <img src="{{ asset('/icons/contacto_ubicacion.png') }}">
        <div class="item-inner">
          <h3>Nos ubicamos en</h3>
          <p>Av. Rauquén 441<br>Lote No. 4<br>Sarmiento, Curicó</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/contacto_telefono.png') }}">
        <div class="item-inner">
          <h3>Llámenos al</h3>
          <p>(75) 2 590 148<br>
            +56 9 656 58 526
          </p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/contacto_horario.png') }}">
        <div class="item-inner">
          <h3>Horario de Atención</h3>
          <p><b>Lunes a Viernes</b><br>
            08:30 a 13:00 hrs<br>
            14:30 a 18:30 hrs
          </p>
          <p><b>Sabados</b><br>
            08:30 a 12:30 hrs
          </p>
        </div>
      </div>
    </div>
    <div class="mapa">
      {{-- <div class="mapouter"> --}}
        {{-- <div class="gmap_canvas"> --}}
          <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.%20Rauqu%C3%A9n%20441&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
        {{-- </div> --}}
        <style>
        /* .mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;} */
        </style>
      {{-- </div> --}}
    </div>
  </section>

@endsection
