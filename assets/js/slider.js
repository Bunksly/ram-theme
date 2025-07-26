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
});