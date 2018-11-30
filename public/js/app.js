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

  // Lightbox
  // ::Empresas
  $('.chocolat-experiencia').Chocolat(
    {
      images: [
        {src:'/lightbox/1.jpg'},
        {src:'/lightbox/2.jpg'},
        {src:'/lightbox/3.jpg'},
        {src:'/lightbox/4.jpg'},
        {src:'/lightbox/5.jpg'},
        {src:'/lightbox/6.jpg'}],
      // lastImage: 0,
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-evaluacion').Chocolat(
    {
      images: [
        {src:'/lightbox/12.jpg'},
        {src:'/lightbox/16.jpg'},
        {src:'/lightbox/17.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-seguimiento').Chocolat(
    {
      images: [
        {src:'/lightbox/11.jpg'},
        {src:'/lightbox/11.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  // ::Hogares
  $('.chocolat-equipo').Chocolat(
    {
      images: [
        {src:'/lightbox/7.jpg'},
        {src:'/lightbox/8.jpg'},
        // {src:'/lightbox/13.jpg'},
        {src:'/lightbox/10.jpg'},
        {src:'/lightbox/14.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-personalizada').Chocolat(
    {
      images: [
        {src:'/lightbox/13.jpg'},
        {src:'/lightbox/13.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
  $('.chocolat-postventa').Chocolat(
    {
      images: [
        {src:'/lightbox/5.jpg'},
        {src:'/lightbox/6.jpg'}],
      duration: 600,
      imageSize: 'contain'
    }
  );
});
