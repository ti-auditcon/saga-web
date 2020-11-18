<footer class="pd-lr">

  <div class="footer-inner">

    {{-- Certificaciones --}}
    <section class="certificaciones">
      <div class="item">
        <h4 style="color: #81DF20;">Certificaciones &<br>Membresias</h4>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/asr.png') }}">
        <h4>ISO 9001: 2015</h4>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_certificado.png') }}">
        <h4>NCh 2909</h4>
      </div>
      <div class="item">
        <img src="{{ asset('/icons/icono_certificado.png') }}">
        <h4>Miembro ACHICPLA</h4>
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
            <a href="tel:+56752397706" id="boton-numero-fijo">(75) 2 397 706</a><br>
            <a href="tel:+56965658526" id="boton-numero-celular">(9) 656 58 526</a>
          </p>
        </div>
        <div class="item">
          <img src="{{ asset('/icons/icono_contactenos.png') }}">
          <p>
            <small>Contáctenos a</small><br>
            <a href="mailto:info@sagaservice.cl" id="boton-email">info@sagaservice.cl</a>
          </p>
        </div>
        {{-- <div class="item">
          <img src="{{ asset('/icons/icon_rrss.png') }}">
          <p>
            <small>Nuestras Redes</small><br>
            <a class="rrss-links" href="#" id="boton-rrss-facebook"><img src="{{ asset('/icons/rrss_facebook.png') }}"></a>
            <a class="rrss-links" href="#" id="boton-rrss-instagram"><img src="{{ asset('/icons/rrss_instagram.png') }}"></a>
            <a class="rrss-links" href="#" id="boton-rrss-linkedin"><img src="{{ asset('/icons/rrss_linkedin.png') }}"></a>
          </p>
        </div> --}}

      </div>

      {{-- Menus Corporativos --}}
      <div class="footer-menus">
        <h5>Corporativo</h5>
        <ul>
          <a href="/">Inicio</a>
          <a href="{{url('/empresas')}}">Servicios para Empresas</a>
          <a href="{{url('/hogares')}}">Servicios para Hogares</a>
          <a href="{{url('/saga')}}">¿Porque SAGA?</a>
          <a href="{{url('/contacto')}}">Contacto</a>
        </ul>
      </div>

      {{-- Menus Servicio --}}
      <div class="footer-menus">
        <h5>Servicios</h5>
        <ul>
          <a href="{{url('/servicios/empresas/desratizacion')}}">Desratización</a>
          <a href="{{url('/servicios/empresas/sanitizacion')}}">Sanitización</a>
          <a href="{{url('/servicios/empresas/desinsectacion')}}">Desinsectación</a>
          <a href="{{url('/servicios/empresas/otras-plagas')}}">Otras Plagas</a>
          <a href="{{url('/servicios/empresas/ornamentacion')}}">Jardinería</a>
        </ul>
      </div>

      {{-- Contacto RR.SS & Horario --}}
      <div class="rrss-atencion">

        {{-- Horario de Atención --}}
        <h5>Horarios</h5>
        <p>
          Lunes a Viernes<br>
          <span>
            08:30 - 13:00 hrs<br>
            14:30 - 18:30 hrs
          </span>
        </p>
        <p>
          Sábados<br>
          <span>
            08:30 - 12:30 hrs
          </span>
        </p>

      </div>

    </section>

    <div class="copy">
      <p>&copy; {{ date('Y') }} SAGA Service. Todos los derechos reservados.<br> Hecho con &hearts; en Curicó, Chile por <a href="http://asomic.com">asomic</a></p>
    </div>

  </div>

</footer>
