@extends('layouts.app')
@section('page-title')
<title>Contacto - SAGA Service</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
  {{-- Title Section --}}
  <section class="title-section pd-lr" style="background-image: url('{{asset('/img/img-contacto.jpg')}}')">
    <img class="animated fadeIn ultra-slow" src="{{ asset('/icons/saga_icon.png') }}">
    <h1 class="animated fadeIn ultra-slow">Contáctese con Nosotros</h1>
  </section>

  {{-- Formulario --}}
  <section class="contact-form pd-lr">

    <div class="the-form animated fadeIn slow">
      {{-- {!! Form::open(['action' => 'route("ruta")','class'=>'row','method'=>'POST','id'=>'captcha-form']) !!} --}}
      <form action="{{ route('ruta') }}" class="row formulario" id="captcha-form">

          <div class="validar-campos d-none animated fadeIn">
            Por favor, seleccione un servicio
          </div>
          <div class="validar-campos-short d-none animated fadeIn">
            Rellene los campos antes de enviar
          </div>

          {{-- For: Selección: Empresa / Hogar --}}
          <div class="fields-for">
            <p><b>Consultar para:</b></p>
            <input type="checkbox" class="select-checkbox select-checkbox-empresa" id="checkbox-empresa" value="Empresa" name="consulta" checked="checked">
            <label class="checkbox-label" for="checkbox-empresa">Empresa</label>
            <input type="checkbox" class="select-checkbox select-checkbox-hogares" id="checkbox-hogares" value="Hogar" name="consulta" >
            <label class="checkbox-label" for="checkbox-hogares">Hogares</label>
          </div>

          {{-- Datos Generales: Nombre, Apellido, Correo, Numero --}}
          <div class="fields-general">
            <input type="text" name="nombre" placeholder="Nombre" class="input-nombre">
            <input type="text" name="email" placeholder="Correo" class="input-correo">
            <input type="text" name="telefono" placeholder="Número de Contacto" class="input-telefono">
            <input type="text" name="direccion" placeholder="Dirección" class="animated fast fadeIn input-direccion">
          </div>

          {{-- Opcional: Data Empresa --}}
          <div class="fields-empresa animated fast fadeIn" id="campos-datosEmpresa">
            <input type="text" name="nombreEmpresa" placeholder="Nombre de la Empresa" class="input-nombreEmpresa">
            <input type="text" name="direccionEmpresa" placeholder="Dirección de la Empresa" class="input-direccionEmpresa">
          </div>

          {{-- Seleccionar Motivo --}}
          <div class="fields-motivo">
            <p><b>Motivo:</b></p>
            <input type="checkbox" class="select-checkbox select-checkbox-consultas" id="checkbox-consultas" name="motivoConsulta" value="consulta" checked="checked">
            <label class="checkbox-label" for="checkbox-consultas">Consultas</label>
            <input type="checkbox" class="select-checkbox select-checkbox-visita" id="checkbox-visitas" name="motivoVisita" value="visita">
            <label class="checkbox-label" for="checkbox-visitas">Solicitar una Visita</label>
          </div>

          {{-- Seleccionar Servicios --}}
          <div class="fields-servicios">
            <p><b>Seleccione uno o más servicios:</b></p>
            <button type="button" class="select-button-c selected" >
              <input class="servicios" hidden name="servicios[]" value="Desratización"  />
              Desratización
            </button>
            <button type="button" class="select-button-c">
              <input class="servicios" hidden name="servicios[]" value="Sanitización"  />
              Sanitización
            </button>
            <button type="button" class="select-button-c">
              <input class="servicios" hidden name="servicios[]" value="Desinsectación"  />
              Desinsectación
            </button>
            <button type="button" class="select-button-c">
              <input class="servicios" hidden name="servicios[]" value="Otras Plagas"  />
              Otras Plagas
            </button>
            <button type="button" class="select-button-c">
              <input class="servicios" hidden name="servicios[]" value="Jardinería"  />
              Jardinería
            </button>
          </div>

          {{-- Mensaje --}}
          <textarea class="mensaje" placeholder="Describa su solicitud" name="mensaje"></textarea>

          <button class="send-button" id="boton-enviar">Enviar</button>

          <div class="mensaje-formulario">
            <div class="mensaje-cargando d-none animated fadeIn">
              Cargando...
            </div>
            <div class="mensaje-enviado d-none animated fadeIn">
              Mensaje Enviado. Nos contactaremos con usted a la brevedad.
            </div>
            <div class="mensaje-error d-none animated fadeIn">
              Tuvimos problemas enviando su mensaje por este formulario, por favor contáctenos directamente a info@sagaservice.cl.
            </div>
          </div>


      {{-- {{Form::close()}} --}}
      </form>
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
          <p>(75) 2 397 706<br>
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
      <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.%20Rauqu%C3%A9n%20441&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
      </iframe>
    </div>
  </section>
@endsection
