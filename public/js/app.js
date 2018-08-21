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
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });

  // Contact fields
  $('.fields-for .select-button').click(function(){
    $('.select-button').removeClass('selected');
    $(this).addClass('selected');
  });

  $('.button-empresa').click(function(){
    $('.fields-empresa').removeClass('bd-none');
    $('.fields-general [name="input-direccion"]').addClass('bd-none');
  });

  $('.button-hogares').click(function(){
    $('.fields-empresa').addClass('bd-none');
    $('.fields-general [name="input-direccion"]').removeClass('bd-none');
  });

  $('.fields-motivo .select-button-b').click(function(){
    $('.select-button-b').removeClass('selected');
    $(this).addClass('selected');
  });

  $('.fields-servicios .select-button-c').click(function(){
    // $('.select-button-c').removeClass('selected');
    $(this).toggleClass('selected');
  });

});
