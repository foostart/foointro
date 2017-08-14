$(document).ready(function () {
    $(".filter").click(function () {
        $(".list-2").slideToggle();
    });
    $(".out").click(function () {
        $(".list-2").css('display','none');
    });
     $(".primary").click(function () {
        $(".list-2").slideUp();
    });
});