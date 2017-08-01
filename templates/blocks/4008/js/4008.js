$(document)(function () {
    $(".minus").click(function () {
        $(".contact").slideUp();
        $(".minus").css('display', 'none');
        $(".plus").css('display', 'block');
    });
    $(".plus").click(function () {
        $(".contact").slideDown();
        $(".plus").css('display', 'none');
        $(".minus").css('display', 'block');
    });
     $(".show").click(function () {
        $(".type-3").slideDown();
    });
});

