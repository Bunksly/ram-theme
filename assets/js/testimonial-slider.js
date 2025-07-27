jQuery(document).ready(function ($) {
    $('.testimonial-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        rows: 2, // gives a grid effect
        arrows: true,
        prevArrow: $('.testimonial-prev'),
        nextArrow: $('.testimonial-next'),
        dots: false,
        responsive: [
            {
                breakpoint: 1024, // tablet
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    rows: 1
                }
            }
        ]
    });
});
