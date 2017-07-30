
$(document).ready(function (){
                
    $(window).bind('scroll',function (){
       
                var navHeight = $(window).height()-500;
           
			 if ($(window).scrollTop() >= 200){
                
                              $('div.hiding-header').addClass("hiddenn");
                              $('div.header-bar').addClass("fixed");
                               $(' .navbar-brand').addClass('img-scrool');
                             
                    }
                    else
                        {
                             $('div.hiding-header').removeClass("hidden");
                              $('div.header-bar').removeClass("fixed");
                            $(' .navbar-brand').removeClass('img-scrool');
                        }
       
           
                 });
            });
            
            
  
$(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            var sel3 = sideslider.attr('data-target-3');
            var sel4 = sideslider.attr('data-target-4');
            var sel5 = sideslider.attr('data-target-5');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
                $(sel3).toggleClass('fiedx');
                $(sel4).fadeToggle();
                $(sel5).toggleClass('body-mobile');
                 $(".navbar-form").css('display','none');
           $(".menudownn").css('display','none');
            });
            
            
        });
        
$(document).ready(function () {
    $(".search-tablet-trigger").click(function () {
        $(".navbar-form").slideToggle();
           $(".menudownn").css('display','none');
    });

});
$(document).ready(function () {
    $(".input-group-btn").click(function () {
       $(".menudownn").slideToggle();
      
    });

});
$(document).ready(function () {
    $(".pull-right").click(function () {
        
          $(".navbar-form").slideToggle();
        $(".menudownn").css('display','block');
    });

});

$(document).ready(function (){
    var height = $('.module-4000').height();
    var width = $(window).width();
      
  $(window).resize(function (){
    
      $('.navbar-form').css('display','block');
        $('.search-field').css('display','none');
       $(".menudownn").css('display','none');
       if(width > 767){
           $('body').removeClass('body-mobile');
         
       }
     
  });
  
  
});

        