// IIFE
(function() {
    const url = window.location;
    const offsetTop = 600;

    $(document).ready(function() {
        //  ACTIVE MENU
        $('header nav ul li a[href="' + url + '"]').addClass("active-menu-topo");
        $('aside li a[href="' + url + '"]').addClass("active-menu-aside");

        // SCROLL UP PAGE
        $('footer').after('<span id="scrollUp"/>');
    });

    // SUB-MENU AUTO SCROLL
    $('header [id*="menu"] ul ul').each(function() {
        if ($(this).children().length > 15 || $(this).height() > 400) $(this).addClass('sub-menu-scroll');
    });

    $(window).scroll(function() {
        // SCROLL UP PAGE
        if ($(window).scrollTop() >= offsetTop) {
            $('#scrollUp').addClass('is-active');
        } else {
            $('#scrollUp').removeClass('is-active');
        }
    });

    $('#scrollUp').on('click', function() {
        $('html, body').animate({
           scrollTop: 0
        }, '300');
    });
})();