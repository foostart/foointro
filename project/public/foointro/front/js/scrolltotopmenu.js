
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 450;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
                                  $('nav div a').addClass('fixe');
			 }
			 else {
				 $('nav').removeClass('fixed');
                                  $('nav div a').removeClass('fixe');
			 }
		});
	});
