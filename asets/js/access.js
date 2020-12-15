jQuery(document).ready(function () {
    "use script";
    document.ondragstart = noselect;
    document.onselectstart = noselect;
    document.oncontextmenu = noselect;
    function noselect() { return false; }
    $("img, i, h1, h2, h3, h4, h5, h6, p, span").dblclick(function () {
        $(".copy_protect").addClass("show_mesag");
        setTimeout(function () {
            $(".copy_protect").removeClass("show_mesag");
        }, 1500);
    });
    $("img, i").on("contextmenu", function () {
        $(".copy_protect").addClass("show_mesag");
        setTimeout(function () {
            $(".copy_protect").removeClass("show_mesag");
        }, 1500);
    });
});