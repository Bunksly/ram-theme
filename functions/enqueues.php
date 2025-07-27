<?php

/* ENQUEUE THE WHOLE INTERNET */
function ram_theme_enqueue_assets()
{
    //css stylesheets
    wp_enqueue_style(
        'ram-theme-style',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );
    //the portfolio slider
    wp_enqueue_script(
        'portfolio-slider',
        get_template_directory_uri() . '/assets/js/portfolio-slider.js',
        ['jquery'],
        null,
        true
    );
    wp_localize_script('portfolio-slider', 'ramAjax', [
        'ajaxurl' => admin_url('admin-ajax.php')
    ]);

    wp_enqueue_script(
        'gallery-scroller',
        get_template_directory_uri() . '/assets/js/gallery-scroller.js',
        [],
        null,
        true
    );

    // Slick styles
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');

    // Slick JS + jQuery
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.min.js', ['jquery'], null, true);

    // Javascript
    wp_enqueue_script('ram-slider', get_template_directory_uri() . '/assets/js/slider.js', ['jquery', 'slick-js'], null, true);

    // Javascript
    wp_enqueue_script('main-javascript', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'slick-js'], null, true);

    // dashicons
    wp_enqueue_style('dashicons');

    wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', [], null);
    wp_enqueue_script('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', [], null, true);
    wp_add_inline_script('glightbox', 'const lightbox = GLightbox();');
}
add_action('wp_enqueue_scripts', 'ram_theme_enqueue_assets');
