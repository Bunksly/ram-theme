jQuery(function ($) {
    let page = 2; // Already loaded page 1
    let loading = false;

    const $slider = $('#portfolio-slider');

    // Init slick for multi-slide but one slide == 3 cards
    $slider.slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true
    });

    // Next button
    $('#portfolio-next').on('click', function () {
        // If next slide already exists, just slide to it
        if ($slider.slick('slickCurrentSlide') < $slider.slick('getSlick').slideCount - 1) {
            $slider.slick('slickNext');
            return;
        }

        if (loading) return;
        loading = true;

        $.post(ramAjax.ajaxurl, {
            action: 'ram_load_more_portfolio_slide',
            page: page
        }, function (response) {
            if (response) {
                $slider.slick('slickAdd', response);
                page++;
                $slider.slick('slickNext');
            }
            loading = false;
        });
    });

    // Prev button
    $('#portfolio-prev').on('click', function () {
        $slider.slick('slickPrev');
    });

    $('#portfolio-prev-mobile').on('click', function () {
        $slider.slick('slickPrev');
    });
    // Next button
    $('#portfolio-next-mobile').on('click', function () {
        // If next slide already exists, just slide to it
        if ($slider.slick('slickCurrentSlide') < $slider.slick('getSlick').slideCount - 1) {
            $slider.slick('slickNext');
            return;
        }

        if (loading) return;
        loading = true;

        $.post(ramAjax.ajaxurl, {
            action: 'ram_load_more_portfolio_slide',
            page: page
        }, function (response) {
            if (response) {
                $slider.slick('slickAdd', response);
                page++;
                $slider.slick('slickNext');
            }
            loading = false;
        });
    });
});
