$(document).ready(function(){

/*$('html, body').animate({
    scrollTop: $(".work").offset().top
}, 2000);*/


  $(function() {
    Grid.init();
  });



  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 3000);
          return false;
        }
      }
    });
  });	

$('#past').on('click', function(e){
    e.preventDefault();
    $('.present, .present_pics').hide();
    $('.future, .future_pics, .mailme, .mailme_deats').hide();
    $('.past, .past_pics').slideToggle();
    
  });

$('#present').on('click', function(e){
    e.preventDefault();
    $('.past, .past_pics').hide();
    $('.future, .future_pics, .mailme, .mailme_deats').hide();
    $('.present, .present_pics').slideToggle();
  });

$('#future').on('click', function(e){
    e.preventDefault();
    $('.past, .past_pics').hide();
    $('.present, .present_pics').hide();
    $('.future, .future_pics, .mailme, .mailme_deats').slideToggle();
  });



});	




