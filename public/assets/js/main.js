jQuery(document).ready(function ($) {
    $(" ul.nav > li > a").click(function () {
        console.log($(this).parent());
        $(this).siblings().removeClass("active");
        $(this).parent().addClass("active");
    });
});