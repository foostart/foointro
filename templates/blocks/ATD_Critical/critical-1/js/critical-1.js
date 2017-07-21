$(function () {
    $(".fa-share-square-o").click(function () {
        $(".item").toggleClass('in');
        $(".fa-share-square-o").css('display', 'none');
        $(".x").css('display', 'block');
    });
    $(".x").click(function () {
        $(".item").toggleClass('in');
         $(".x").css('display', 'none');
        $(".fa-share-square-o").css('display', 'block');
    });
});