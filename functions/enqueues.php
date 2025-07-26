<?php

/* ENQUEUE TAILWIND STYLESHEET */
function ram_theme_enqueue_assets()
{
    wp_enqueue_style(
        'ram-theme-style',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );
}
add_action('wp_enqueue_scripts', 'ram_theme_enqueue_assets');

/* CAROUSEL */
function ram_enqueue_assets()
{
    // Slick styles
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');

    // Slick JS + jQuery
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.min.js', ['jquery'], null, true);

    // Javascript
    wp_enqueue_script('ram-slider', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'slick-js'], null, true);
}
add_action('wp_enqueue_scripts', 'ram_enqueue_assets');
