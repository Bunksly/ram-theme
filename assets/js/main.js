jQuery(document).ready(function ($) {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        fade: true,
        speed: 1000,
        infinite: true,
        pauseOnHover: false,
        cssEase: 'ease-in-out'
    });

    $('#menu-toggle').on('click', function () {
        $('#mobile-menu').slideToggle(200);
        $(this).toggleClass('open'); // toggle "cross" state
        $(this).attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});
