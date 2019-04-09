$(function(){

  $('.fields-servicios .select-button-c').children('input').prop('checked', false);

  $('.close').click(function() {
      var destination = $(this).data("link");
   $("body").fadeOut(200,function(){
         window.location.replace(destination);
      });
  });

  // Mostrar/Ocultar Menus
  $('.button-open').click(function(){
    $('nav.main-menu').addClass('fadeIn');
    $('nav.main-menu').removeClass('fadeOut sh');
  });
  $('.button-close').click(function(){
    $('nav.main-menu').removeClass('fadeIn');
    $('nav.main-menu').addClass('fadeOut').delay(400).queue(function(){
      $(this).addClass('sh').dequeue();
    });
  });

  // Cambiar a 'darkHeader'
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $('header.main-header').addClass('darkHeader fadeInDown');
    } else {
        // $('.darkHeader').addClass('fadeInUp');
        $('header.main-header').removeClass('darkHeader fadeInDown');
    }
  });

  AOS.init();

  // You can also pass an optional settings object
  // below listed default settings
  AOS.init({
    // Global settings
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

    // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 800, // values from 0 to 3000, with step 50ms
    easing: 'ease-in-out', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });

  // Contact fields

  $('.select-checkbox-empresa').click(function(){
    $('.select-checkbox-hogares').prop('checked', false);
    $('.fields-empresa').removeClass('bd-none');
    $('.fields-general [name="input-direccion"]').addClass('bd-none');
  });
  $('.select-checkbox-hogares').click(function(){
    $('.select-checkbox-empresa').prop('checked', false);
    $('.fields-empresa').addClass('bd-none');
    $('.fields-general [name="input-direccion"]').removeClass('bd-none');
  });

  $('.select-checkbox-consultas').click(function(){
    $('.select-checkbox-visita').prop('checked', false);
  });
  $('.select-checkbox-visita').click(function(){
    $('.select-checkbox-consultas').prop('checked', false);
  });

  $('.fields-servicios .select-button-c').click(function(){
    $(this).toggleClass('selected');
    console.log('fdsdfs');
    var cb  = $(this).children('input');
    cb.prop('checked', !cb.prop("checked"));
  });

  // Scroll to Info -> Hero Button
  $('.cta-button-hero').click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#clientes').offset().top-40
    }, 1000);
  });

  // Selectors
  $('#boton-select-empresas').click(function(){
    // e.preventDefault();
    $('.items-empresas').removeClass('hidden').fadeOut(0).fadeIn(400);
    $('.button-empresas').addClass('clicked');
    $('.items-hogares').addClass('hidden');
    $('.button-hogares').removeClass('clicked');

  });
  $('#boton-select-hogares').click(function(){
    // e.preventDefault();
    $('.items-hogares').removeClass('hidden').fadeOut(0).fadeIn(400);
    $('.button-hogares').addClass('clicked');
    $('.items-empresas').addClass('hidden');
    $('.button-empresas').removeClass('clicked');

  });

  // Lightbox
  // ::Empresas
  $('.chocolat-experiencia').Chocolat(
    {
      images: [
        {src:'/lightbox/39.jpg'},
        {src:'/lightbox/2.jpg'},
        {src:'/lightbox/3.jpg'},
        {src:'/lightbox/4.jpg'},
        {src:'/lightbox/5.jpg'},
        {src:'/lightbox/40.jpg'},
        {src:'/lightbox/41.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-evaluacion').Chocolat(
    {
      images: [
        {src:'/lightbox/16.jpg'},
        // {src:'/lightbox/36.jpg'},
        // {src:'/lightbox/28.jpg'},
        {src:'/lightbox/11.jpg'},
        {src:'/lightbox/35.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-seguimiento').Chocolat(
    {
      images: [
        // {src:'/lightbox/11.jpg'},
        // {src:'/lightbox/30.jpg'},
        {src:'/lightbox/42.jpg'},
        {src:'/lightbox/33.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  // ::Hogares
  $('.chocolat-equipo').Chocolat(
    {
      images: [
        // {src:'/lightbox/7.jpg'},
        {src:'/lightbox/25.jpg'},
        {src:'/lightbox/10.jpg'},
        // {src:'/lightbox/8.jpg'},
        {src:'/lightbox/27.jpg'},
        {src:'/lightbox/14.jpg'},
        {src:'/lightbox/44.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-personalizada').Chocolat(
    {
      images: [
        // {src:'/lightbox/18.jpg'},
        {src:'/lightbox/20.jpg'},
        {src:'/lightbox/38.jpg'},
        {src:'/lightbox/46.jpg'},
        {src:'/lightbox/47.jpg'},
        {src:'/lightbox/48.jpg'},
        {src:'/lightbox/49.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-postventa').Chocolat(
    {
      images: [
        // {src:'/lightbox/31.jpg'},
        // {src:'/lightbox/32.jpg'},
        {src:'/lightbox/33.jpg'},
        {src:'/lightbox/43.jpg'},
        {src:'/lightbox/45.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );


  $('.slider').bxSlider({
    controls: false,
    auto: true,
    pause: 3000,
    autoStart: true,

  });


  // Validacion de Campos: Formulario

  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var campo_error = '';

  // Validacion de Envio: Formulario
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("#boton-enviar").click(function(e) {
      e.preventDefault();
      var form_action = $('.formulario').attr('action');

      // Consultar para
      var tipo = '';
      if ( $('.select-checkbox-empresa').is(':checked') ) {
        var tipo = 'Empresa';
      } else if ( $('.select-checkbox-hogares').is(':checked') ) {
        var tipo = 'Hogar';
      }
      // console.log(checkEmpresa);

      // Datos Generales
      var nombre = $(".input-nombre").val();
      var correo = $(".input-correo").val();
      var telefono = $(".input-telefono").val();
      var direccion = $(".input-direccion").val();

      // Datos Generales: Empresa
      var nombreEmpresa = $(".input-nombreEmpresa").val();
      var direccionEmpresa = $(".input-direccionEmpresa").val();

      // Motivo:
      var motivo = '';
      if ( $('.select-checkbox-consultas').is(':checked') ) {
        motivo = 'Consulta'
      } else if ( $('.select-checkbox-visita').is(':checked') ) {
        motivo = 'Solicitud de Visita'
      }

      // Servicios:
      var servicios = '';
      var inputs = $('button.selected .servicios');
      servicios = [].map.call(inputs, function( input ) {
        return input.value;
      })

      // Mensaje:
      var mensaje = $(".mensaje").val();
      var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

      if (nombre.length > 0 && correo.length > 0 && testEmail.test(correo) && telefono.length > 0 && direccion.length > 0 && mensaje.length > 0 && $('button.select-button-c').hasClass('selected')){

        $('.mensaje-formulario .mensaje-cargando').toggleClass('d-none');
        $("#boton-enviar").attr("disabled", true);

        $.post( form_action, {
          nombre: nombre,
          email: correo,
          telefono: telefono,
          direccion: direccion,
          mensaje: mensaje,
          nombreEmpresa: nombreEmpresa,
          direccionEmpresa: direccionEmpresa,
          tipo: tipo,
          motivo: motivo,
          servicios: servicios
        } ).done(function(data) {

            console.log('email send');

            if (data['errors']) {
              $.each(data['errors'], function( index, value ){});
            } else {
              $('.mensaje-formulario .mensaje-cargando').toggleClass('d-none');
              $('.mensaje-formulario .mensaje-enviado').toggleClass('d-none')
              .delay(4000).queue(function(){
                $('.mensaje-formulario .mensaje-enviado').toggleClass('d-none').dequeue();
              });
            }
          }
        ).fail(function(data){
          $('.mensaje-formulario .mensaje-cargando').toggleClass('d-none');
          $('.mensaje-formulario .mensaje-error').toggleClass('d-none');
          console.log('email fail '+data);
        });

      } else {

        if (nombre.length <= 0) {
          $('.validar-campos-short').removeClass('d-none');
          $('.input-nombre').addClass('error');

          $('.input-nombre').focusout(function(){
            if($('.input-nombre').val() != "") {
              $('.validar-campos-short').addClass('d-none');
              $('.input-nombre').removeClass('error');
            }
          });
        }

        if (correo.length <= 0) {
          $('.validar-campos-short').removeClass('d-none');
          $('.input-correo').addClass('error');

          $('.input-correo').focusout(function(){
            if($('.input-correo').val() != "") {
              $('.validar-campos-short').addClass('d-none');
              $('.input-correo').removeClass('error');
            }
          });
        }

        if (telefono.length <= 0) {
          $('.validar-campos-short').removeClass('d-none');
          $('.input-telefono').addClass('error');

          $('.input-telefono').focusout(function(){
            if($('.input-telefono').val() != "") {
              $('.validar-campos-short').addClass('d-none');
              $('.input-telefono').removeClass('error');
            }
          });
        }

        if (direccion.length <= 0) {
          $('.validar-campos-short').removeClass('d-none');
          $('.input-direccion').addClass('error');

          $('.input-direccion').focusout(function(){
            if($('.input-direccion').val() != "") {
              $('.validar-campos-short').addClass('d-none');
              $('.input-direccion').removeClass('error');
            }
          });
        }

        if (mensaje.length <= 0) {
          $('.validar-campos-short').removeClass('d-none');
          $('.mensaje').addClass('error');

          $('.mensaje').focusout(function(){
            if($('.mensaje').val() != "") {
              $('.validar-campos-short').addClass('d-none');
              $('.mensaje').removeClass('error');
            }
          });
        }

        if (!$('.select-button-c').hasClass('selected')) {
          $('.validar-campos').removeClass('d-none');

          // $('.select-button-c').click(function(){
          //   $('.validar-campos-short').addClass('d-none');
          // });

          // if ($('.select-button-c').hasClass('selected') {
          //   $('.validar-campos-short').addClass('d-none');
          // }
        }

        $('.select-button-c').click(function(){
          $('.validar-campos').addClass('d-none');
        });


      }

//
//
//
//
//
//
//
//
//
//
//
//

  });

});
//
