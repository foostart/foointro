$(function () {
    $(".close-btn").click(function () {
        $("#topics").css('display', 'none');
        $('.mosaic-component,.text-overlay-xs').css('display', 'block');
    });
    $('.primary').click(function () {
        $('.filter-container').slideToggle();
//        $('.text-overlay-xs').css('display', 'none');

    });

    $(".close-btn").click(function () {
        $("#sort").css('display', 'none');
        $('.mosaic-component').css('display', 'block');
    });
    $('.sort-button').click(function () {
        $('#sort').slideToggle();
        $('.mosaic-component').css('display', 'none');
    });


    //media cong tru---------------------------------------

    $('.tru').click(function () {
        $('#filter-area').slideUp();
        $('.tru').css('display', 'none');
        $('.cong').css('display', 'block');
    });
    $('.cong').click(function () {
        $('#filter-area').slideDown();
        $('.cong,#topic-1,.tru2,#topic-2,.tru3').css('display', 'none');
        $('.tru,.cong2,.cong3').css('display', 'block');
    });

    //------------------------------------------------------
    $('.tru2').click(function () {
        $('#topic-1').slideUp();
        $('.tru2').css('display', 'none');
        $('.cong2').css('display', 'block');
    });
    $('.cong2').click(function () {
        $('#topic-1').slideDown();
        $('.cong2,#filter-area,.tru,#topic-2,.tru3').css('display', 'none');
        $('.tru2,.cong,.cong3').css('display', 'block');
    });
    //-----------------------------------------------------
    $('.tru3').click(function () {
        $('#topic-2').slideUp();
        $('.tru3').css('display', 'none');
        $('.cong3').css('display', 'block');
    });
    $('.cong3').click(function () {
        $('#topic-2').slideDown();
        $('.cong3,#filter-area,.tru,#topic-1,.tru2').css('display', 'none');
        $('.tru3,.cong,.cong2').css('display', 'block');
    });
    //-----------------------------------------------------

});