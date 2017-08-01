$(document).ready(function () {
    $(".filter").click(function () {
        $(".mega-2-container").slideToggle();
    });
    $(".out").click(function () {
        $(".mega-2-container").css('display','none');
    });
});