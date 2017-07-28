
$(document).ready(function (){
                 var navHeight = $( window ).width();

    	 if (navHeight < 767) {
                
                $('div.col-xs-6.col-sm-3:odd').addClass("reponmobile");
}
    $(window).bind('resize',function (){
       
             var navHeight = $( window ).width();
           
			 if (navHeight < 767) {
                
                $('div.col-xs-6.col-sm-3:odd').addClass("reponmobile");
}
else
{
    $('div').removeClass("reponmobile");
}
       
           
    });
});