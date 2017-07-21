
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 600;
			 if ($(window).scrollTop() > navHeight) {
				 $('div').addClass(function(index, current){
        var newClass;
        if(current == "ATD_content_2") {
            newClass = "firexd";
        }
        return newClass;
    });
                                
			 }
			 else {
                                
				$('div').removeClass('firexd');
                                
                                  
			 }
		});
	});
