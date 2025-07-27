jQuery(document).ready(function ($) {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: true,
        fade: true,
        speed: 1000,
        infinite: true,
        pauseOnHover: false,
        cssEase: 'ease-in-out',
        customPaging: function (slider, i) {
            // Return an HTML element for each dot
            return '<button type="button" class="slick-dot-custom"></button>';
        }
    });
});