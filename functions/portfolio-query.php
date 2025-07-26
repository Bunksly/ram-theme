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
        <div class="portfolio-slide">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="bg-white rounded-md shadow-md overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="h-48 overflow-hidden">
                            <?php the_post_thumbnail('medium', ['class' => 'object-cover w-full h-full']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <h2 class="text-xl font-bold"><?php the_title(); ?></h2>
                        <p class="mt-2 text-gray-700"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
<?php
    endif;
    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_ram_load_more_portfolio_slide', 'ram_load_more_portfolio_slide');
add_action('wp_ajax_nopriv_ram_load_more_portfolio_slide', 'ram_load_more_portfolio_slide');