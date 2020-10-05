<header class="main-header pd-lr animated fast">

  <div class="inner-header">

    {{-- Logo --}}
    <div class="header-branding animated fadeIn">
      <a href="/">
        <img class="logo" src="{{ asset('/img/logo.png') }}" alt="Ir al Inicio">
      </a>
    </div>

    {{-- Menú --}}
    <div class="header-menu">
      <button class="button-open hamburger" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <nav class="main-menu sh animated fast">
        <button class="button-close hamburger hamburger--spring is-active animated fadeIn" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        {{-- <ul> --}}
          <a class="animated fadeIn" href="/">Inicio</a>
          {{-- <a class="animated fadeIn close" data-link="{{url('/empresas')}}">Empresas</a> --}}
          <a class="animated fadeIn" href="{{url('/empresas')}}">Empresas</a>
          <a class="animated fadeIn" href="{{url('/hogares')}}">Hogares</a>
          <a class="animated fadeIn" href="{{url('/saga')}}">¿Por qué SAGA?</a>
          {{-- <a class="animated fadeIn" href="{{url('/contacto')}}">Contacto</a> --}}
        {{-- </ul> --}}
        {{-- <a class="button-cta-header animated fadeIn" href="{{url('/contacto')}}" id="boton-solicitar-visita">Solicitar Visita</a> --}}
        <a class="button-cta-header animated fadeIn" href="#" id="boton-solicitar-visita">Iniciar Sesión</a>
      </nav>
    </div>

  </div>

</header>
