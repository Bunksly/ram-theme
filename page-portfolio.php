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
        <div class="portfolio-slide">
            <?php
            $portfolio_query = new WP_Query([
                'post_type'      => 'portfolio',
                'posts_per_page' => 3,
                'paged'          => 1
            ]);

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
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
            <?php
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