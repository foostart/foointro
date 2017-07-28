
$(document).ready(function (){
                 var navHeight = $( window ).width();

    	 if (navHeight < 767) {
                
                $('div.col-xs-6.col-sm-4:nth-last-child(2)').addClass("reponmobile");
}
    $(window).bind('resize',function (){
       
             var navHeight = $( window ).width();
           
			 if (navHeight < 767) {
                
                $('div.col-xs-6.col-sm-4:nth-last-child(2)').addClass("reponmobile");
}
else
{
    $('div').removeClass("reponmobile");
}
       
           
    });
});