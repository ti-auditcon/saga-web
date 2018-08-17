<footer class="pd-lr">

  {{-- Certificaciones --}}
  <section class="certificaciones">
    <div class="item">
      <img src="{{ asset('/icons/icono_certificado.png') }}">
      <h4>ISO 9001</h4>
    </div>
    <div class="item">
      <img src="{{ asset('/icons/icono_certificado.png') }}">
      <h4>NCh 2909</h4>
    </div>
    <div class="item">
      <img src="{{ asset('/icons/icono_certificado.png') }}">
      <h4>NCh 2909</h4>
    </div>
  </section>

  {{-- The Real Footer --}}
  <section class="the-footer">

    {{-- Info Contacto --}}
    <div class="info-contacto">
      <div class="item">
        <img src="{{ asset('/icons/icono_llamenos.png') }}">
        <p>
          <small>Llámenos al</small><br>
          (75) 2 223 696
        </p>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_contactenos.png') }}">
        <p>
          <small>Contáctenos a</small><br>
          info@sagaservice.cl
        </p>
      </div>
    </div>

    {{-- Menus Corporativos --}}
    <div class="footer-menus">
      <h5>Corporativo</h5>
      <ul>
        <a href="/">Inicio</a>
        <a href="{{url('/empresas')}}">Servicios para Empresas</a>
        <a href="{{url('/hogares')}}">Servicios para Hogar</a>
        <a href="{{url('/saga')}}">¿Porque SAGA?</a>
        <a href="{{url('/contacto')}}">Contacto</a>
      </ul>
    </div>

    {{-- Menus Servicio --}}
    <div class="footer-menus">
      <h5>Servicios</h5>
      <ul>
        <a href="{{url('/servicios/desratizacion')}}">Desratización</a>
        <a href="{{url('/servicios/sanitizacion')}}">Sanitización</a>
        <a href="{{url('/servicios/desinsectacion')}}">Desinsectación</a>
        <a href="{{url('/servicios/otras-plagas')}}">Otras Plagas</a>
        <a href="{{url('/servicios/ornamentacion')}}">Ornamentación</a>
      </ul>
    </div>

    {{-- Contacto RR.SS & Horario --}}
    <div class="rrss-atencion">

      {{-- Redes Sociales --}}
      <h5>Redes Sociales</h5>
      <a href="#"><img src="{{ asset('/icons/rrss_facebook.png') }}"></a>
      <a href="#"><img src="{{ asset('/icons/rrss_instagram.png') }}"></a>
      <a href="#"><img src="{{ asset('/icons/rrss_linkedin.png') }}"></a>

      {{-- Horario de Atención --}}
      <h5>Horario de Atención</h5>
      <p>
        Lunes a Viernes<br>
        08:30 - 13:00 hrs<br>
        14:30 - 18:30 hrs
      </p>
      <p>
        Sábado <br>
        08:30 - 12:30 hrs
      </p>

    </div>

  </section>

  <div class="copy">
    <p>&copy; {{ date('Y') }} SAGA Service. Todos los derechos reservados.<br> Hecho con &hearts; en Curicó por <a href="http://asomic.com">asomic</a></p>
  </div>

</footer>
