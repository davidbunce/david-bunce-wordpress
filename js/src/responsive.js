$(document).ready(function() {
  $('.navbar-button').on('click', function() {
      	$('.site-wrap').toggleClass('active');
      	$('.navbar-button').toggleClass('active');
      	
      	if($('.navbar-button').html() === 'Menu') {
  			$('.navbar-button').html('Close Menu');
  		} else {
  			$('.navbar-button').html('Menu');
  		}

  });

  if($('.front-page__clients').length) {
    $('.front-page__clients ul').owlCarousel({
      loop:true,
      margin:10,
    });
  }
});