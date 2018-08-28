$(function(){

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
  });

  // Scroll to Info -> Hero Button
  $('.cta-button-hero').click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#clientes').offset().top-40
    }, 1000);
});

});
