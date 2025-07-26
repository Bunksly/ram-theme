<?php
get_header();
$title = get_the_title();
$content = get_the_content();
?>

<section class="ram-container">
    <div class="max-w-4xl">
        <h1><? echo $title ?></h1>
        <div>
            <? echo $content ?>
        </div>
    </div>
</section>

<section class="ram-container py-16">
    <div id="portfolio-slider" class="portfolio-slick">
        <div class="portfolio-slide !grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
            <?php
            $portfolio_query = new WP_Query([
                'post_type'      => 'portfolio',
                'posts_per_page' => 3,
                'paged'          => 1
            ]);

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();

                    get_template_part('template-parts/card', 'null');

                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>

    <div class="flex gap-4 mt-8">
        <button id="portfolio-prev" class="px-4 py-2 bg-gray-200 rounded">Prev</button>
        <button id="portfolio-next" class="px-4 py-2 bg-primary text-white rounded">Next</button>
    </div>
</section>


<?php get_footer(); ?>