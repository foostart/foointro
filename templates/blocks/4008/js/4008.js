$(document).ready(function () {
    //-----Plus And Minus-----//
    $(".minus-1").click(function () {
        $(".contact").slideUp();
        $(".minus-1").css('display', 'none');
        $(".plus-1").css('display', 'block');
    });
    $(".plus").click(function () {
        $(".contact").slideDown();
        $(".plus").css('display', 'none');
        $(".minus").css('display', 'block');
    });
    
    //------SHOW MORE-----//
     $(".show-more").click(function () {
        $(".type-3").slideDown();
        $(".show-more").css('display', 'none');
    });
    
    //-----Media-767px-----//
    $(".media-filter").click(function () {
        $(".product").slideToggle(0);
        $(".media-767,.type,.sort,.text,.module-4007,.module-4004").css('display', 'none');
         $(".product-filter,.product-4").css('display', 'block');
    });
    $(".end-filter,.product-apply").click(function () {
        $(".product").slideToggle(0);
        $(".media-767,.type,.sort,.text,.module-4007,.module-4004").css('display', 'block');
         $(".product-filter,.product-4").css('display', 'none');
    });
    $(".media-sort-by").click(function () {
        $(".product-sort-by").slideToggle(0);
         $(".media-767,.type,.sort,.text,.module-4007,.module-4004").css('display', 'none');
        $(".product-sort-by").css('display', 'block');
        $(".product-filter,.product-4").css('display', 'block');
    });
   $(".end-sort-by").click(function () {
        $(".product").slideToggle(0);
        $(".media-767,.type,.sort,.text,.module-4007,.module-4004").css('display', 'block');
         $(".product-filter,.product,.product-sort-by").css('display', 'none');
    });
    $(".product-sort-by-2").click(function (){
       $(".check-1").css('background','#ff8c00');
       $(".check-2").css('background','#ccc');
    });
    $(".product-sort-by-3").click(function (){
       $(".check-2").css('background','#ff8c00');
       $(".check-1").css('background','#ccc');
    });
});

