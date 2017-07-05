$(document).ready(function () {
    //Initiate equalize on load
    equalize();
});

//Equalize on resizing of window
$(window).resize(function () {
    removeHeights();
    equalize();
});
function equalize() {
    $(".container .height-row").each(function () {
        var heights = $(this).find(".price-box").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);

        $(this).find(".price-box").height(maxHeight);

    });
}
function removeHeights() {
    $(".container .height-row").each(function () {
        $(this).find(".price-box").height("auto");

    });
}
