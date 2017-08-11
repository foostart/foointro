$(function () {
    $(".close-btn").click(function () {
        $("#topics").css('display', 'none');
         $('.mosaic-component').css('display', 'block');
    });
    $('.primary').click(function () {
        $('#topics').slideToggle();
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
        $('.cong').css('display', 'none');
        $('.tru').css('display', 'block');
    });
    //------------------------------------------------------
    $('.tru2').click(function () {
        $('#topic-1').slideUp();
        $('.tru2').css('display', 'none');
        $('.cong2').css('display', 'block');
    });
    $('.cong2').click(function () {
        $('#topic-1').slideDown();
        $('.cong2').css('display', 'none');
        $('.tru2').css('display', 'block');
    });
    //-----------------------------------------------------
    $('.tru3').click(function () {
        $('#topic-2').slideUp();
        $('.tru3').css('display', 'none');
        $('.cong3').css('display', 'block');
    });
    $('.cong3').click(function () {
        $('#topic-2').slideDown();
        $('.cong3').css('display', 'none');
        $('.tru3').css('display', 'block');
    });
    //-----------------------------------------------------
    
});