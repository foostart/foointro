$(document).ready(function () {
    //-----Plus And Minus-----//
    $(".plus-1").click(function () {
        $(".contact-1").slideDown();
        $(".plus-1,.minus-2,.contact-2,.minus-3,.contact-3,.minus-4,.contact-4").css('display', 'none');
        $(".minus-1,.plus-2,.plus-3,.plus-4").css('display', 'block');
    });
        $(".minus-1").click(function () {
        $(".contact-1").slideUp();
        $(".minus-1").css('display', 'none');
        $(".plus-1").css('display', 'block');
    });
    
    $(".plus-2").click(function () {
        $(".contact-2").slideDown();
        $(".plus-2,.minus-1,.contact-1,.minus-3,.contact-3,.minus-4,.contact-4").css('display', 'none');
        $(".minus-2,.plus-1,.plus-3,.plus-4").css('display', 'block');
    });
        $(".minus-2").click(function () {
        $(".contact-2").slideUp();
        $(".minus-2").css('display', 'none');
        $(".plus-2").css('display', 'block');
    });
    
    $(".plus-3").click(function () {
        $(".contact-3").slideDown();
        $(".plus-3,.minus-1,.contact-1,.minus-2,.contact-2,.minus-4,.contact-4").css('display', 'none');
        $(".minus-3,.plus-1,.plus-2,.plus-4").css('display', 'block');
    });
        $(".minus-3").click(function () {
        $(".contact-3").slideUp();
        $(".minus-3").css('display', 'none');
        $(".plus-3").css('display', 'block');
    });
    
    $(".plus-4").click(function () {
        $(".contact-4").slideDown();
        $(".plus-4,.minus-1,.contact-1,.minus-2,.contact-2,.minus-3,.contact-3").css('display', 'none');
        $(".minus-4,.plus-1,.plus-2,.plus-3").css('display', 'block');
    });
        $(".minus-4").click(function () {
        $(".contact-4").slideUp();
        $(".minus-4").css('display', 'none');
        $(".plus-4").css('display', 'block');
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

