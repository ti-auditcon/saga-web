@extends('layouts.app')
@section('page-title')
<title>Contacto - SAGA Service</title>
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-contacto.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/saga_icon.png') }}">
    <h1 class="animated fadeIn ultra-slow">Contáctese con Nosotros</h1>
  </section>

  {{-- Formulario --}}
  <section class="contact-form pd-lr">
    {{-- <p class="contact-form-intro">Si tiene dudas, consultas o cualquier motivo por el que desea que sepamos de usted puede contactarnos personalmente desde su correo a info@sagaservice.cl<br><br>
    También puede enviarnos un mensaje desde este formulario de contacto.</p> --}}

    <div class="the-form animated fadeIn slow">
      {!! Form::open(['action' => 'MailController@sendmail','class'=>'row','method'=>'POST','id'=>'captcha-form']) !!}


          {{-- For: Selección: Empresa / Hogar --}}
          <div class="fields-for">
            <p><b>Consultar para:</b></p>
            <input type="checkbox" class="select-checkbox select-checkbox-empresa" id="checkbox-empresa" value = "Empresa" name="consulta" >
            <label class="checkbox-label" for="checkbox-empresa">Empresa</label>
            <input type="checkbox" class="select-checkbox select-checkbox-hogares" id="checkbox-hogares" value = "Hogar" name="consulta" >
            <label class="checkbox-label" for="checkbox-hogares">Hogares</label>
            {{-- <button type="button" class="select-button button-empresa">
              Empresa
            </button>
            <button type="button" class="select-button button-hogares">
              Hogar
            </button> --}}
          </div>

          {{-- Datos Generales: Nombre, Apellido, Correo, Numero --}}
          <div class="fields-general">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="email" placeholder="Correo">
            <input type="text" name="telefono" placeholder="Número de Contacto">
            <input type="text" name="direccion" placeholder="Dirección" class="animated fast fadeIn">
          </div>

          {{-- Opcional: Data Empresa --}}
          <div class="fields-empresa bd-none animated fast fadeIn" id="campos-datosEmpresa">
            <input type="text" name="nombreEmpresa" placeholder="Nombre de la Empresa">
            <input type="text" name="direccionEmpresa" placeholder="Dirección de la Empresa">
          </div>

          {{-- Seleccionar Motivo --}}
          <div class="fields-motivo">
            <p><b>Motivo:</b></p>
            <input type="checkbox" class="select-checkbox select-checkbox-consultas" id="checkbox-consultas" name="motivo" value="consulta">
            <label class="checkbox-label" for="checkbox-consultas">Consultas</label>
            <input type="checkbox" class="select-checkbox select-checkbox-visita" id="checkbox-visitas" name="motivo" value="visita">
            <label class="checkbox-label" for="checkbox-visitas">Solicitar una Visita</label>
            {{-- <button type="button" class="select-button-b">
              Consultas Generales
            </button>
            <button type="button" class="select-button-b">
              Solicitar una Visita
            </button> --}}
          </div>

          {{-- Seleccionar Servicios --}}
          <div class="fields-servicios">
            <p><b>Seleccione uno o más servicios:</b></p>
            <button type="button" class="select-button-c" >
              <input type="checkbox" hidden name="servicios[]" value="Desratización"  />
              Desratización
            </button>
            <button type="button" class="select-button-c">
              <input type="checkbox" hidden name="servicios[]" value="Sanitización"  />
              Sanitización
            </button>
            <button type="button" class="select-button-c">
              <input type="checkbox" hidden name="servicios[]" value="Desinsectación"  />
              Desinsectación
            </button>
            <button type="button" class="select-button-c">
              <input type="checkbox" hidden name="servicios[]" value="Otras Plagas"  />
              Otras Plagas
            </button>
            <button type="button" class="select-button-c">
              <input type="checkbox" hidden name="servicios[]" value="Ornamental"  />
              Ornamental
            </button>
          </div>

          {{-- Mensaje --}}
          <textarea class="mensaje" placeholder="Describa su solicitud" name="mensaje"></textarea>
          <button class="send-button" onClick="this.form.submit(); this.disabled=true; this.value='Enviando…'; " id="boton-enviar">Enviar</button>

      {{Form::close()}}
    </div>
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

{{-- @section('specialScripts')
  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -34.9658882, lng: -71.2066924};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 15, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
  </script>
  <!--Load the API from the specified URL
  * The async attribute allows the browser to render the page while the API loads
  * The key parameter will contain your own API key (which is not needed for this tutorial)
  * The callback parameter executes the initMap() function
  -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_hhejFMvhP3S4rt0jwlcE3YHACYV0b0&callback=initMap">
  </script>
@endsection --}}
