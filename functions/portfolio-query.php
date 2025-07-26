<?php

function ram_load_more_portfolio_slide()
{
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $query = new WP_Query([
        'post_type'      => 'portfolio',
        'posts_per_page' => 3,
        'paged'          => $paged
    ]);

    if ($query->have_posts()) : ?>
        <div class="portfolio-slide !grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
            <?php while ($query->have_posts()) : $query->the_post();

                get_template_part('template-parts/card', 'null');

            endwhile; ?>
        </div>
<?php
    endif;
    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_ram_load_more_portfolio_slide', 'ram_load_more_portfolio_slide');
add_action('wp_ajax_nopriv_ram_load_more_portfolio_slide', 'ram_load_more_portfolio_slide');


add_filter('nav_menu_css_class', function ($classes, $item) {
    // Check if we're on a single portfolio post
    if (is_singular('portfolio')) {
        // Get the portfolio page ID (replace 'portfolio' if your slug differs)
        $portfolio_page = get_page_by_path('portfolio');

        if ($portfolio_page && $item->object_id == $portfolio_page->ID) {
            $classes[] = 'current-menu-item';
        }
    }
    return $classes;
}, 10, 2);
