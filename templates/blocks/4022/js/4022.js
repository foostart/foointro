$(document).ready(function () {
    $(".filter").click(function () {
        $(".mega-container-2").slideToggle();
    });
    $(".out").click(function () {
        $(".mega-container-2").css('display','none');
    });
});