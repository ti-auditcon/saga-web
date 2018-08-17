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
