<?php

add_action('wp_ajax_load_gallery_images', 'load_gallery_images');
add_action('wp_ajax_nopriv_load_gallery_images', 'load_gallery_images');

function load_gallery_images()
{
    $offset = intval($_POST['offset']);
    $limit  = 9;

    $images = [];
    $portfolio_posts = new WP_Query([
        'post_type'      => 'portfolio',
        'posts_per_page' => -1
    ]);

    if ($portfolio_posts->have_posts()) :
        while ($portfolio_posts->have_posts()) : $portfolio_posts->the_post();
            $gallery = get_field('gallery');
            if ($gallery) {
                foreach ($gallery as $image) {
                    if ($offset > 0) {
                        $offset--;
                        continue;
                    }
                    if (count($images) >= $limit) break 2;
                    $images[] = $image;
                }
            }
        endwhile;
        wp_reset_postdata();
    endif;

    // Return HTML for images
    foreach ($images as $image) {
        echo '<a href="' . esc_url($image['url']) . '" class="block relative rounded-xs overflow-hidden hoverable-hard-shadow-stone glightbox" data-gallery="all-portfolio">
                <img src="' . esc_url($image['sizes']['large']) . '" alt="' . esc_attr($image['alt']) . '" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105" />
              </a>';
    }

    wp_die();
}
