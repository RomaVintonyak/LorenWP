jQuery(document).ready(function(){
    "use script";
    /* wow init */
    new WOW().init();
    /* back top btn */
    var topBtn = $("#topBtn");
    topBtn.hide(1000);
    var introHeight = $("#intro").height();
    $(window).on("scroll", function(){
        if($(this).scrollTop() > introHeight){
            topBtn.fadeIn(1000);
        }else{
            topBtn.fadeOut(1000);
        }
    });
    topBtn.on("click", function(event){
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 2500);
    });
    /* scroll down btn main page */
    var downBtn = $("#scroll_down");
    downBtn.on("click", function(event){
        event.preventDefault();
        $("html, body").animate({
            scrollTop: introHeight - 50
        }, 1000);
    });
    /* jump to card servicev */
    var jumpItem = $(".jump");
    jumpItem.hover(
        function () {
            $(this).animate({
                marginTop: "-=3%",
            }, 300);
        },
        function () {
            $(this).animate({
                marginTop: "0%",
            }, 200);
        }
    );
});