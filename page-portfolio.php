<?php
get_header();
$title = get_the_title();
$content = get_the_content();
?>

<section class="ram-container">
    <div class="max-w-4xl">
        <h1><?php echo $title ?></h1>
        <div>
            <?php echo $content ?>
        </div>
    </div>
</section>

<section class="ram-container relative">

    <!-- Slick Container -->
    <div id="portfolio-slider" class="portfolio-slick relative">
        <div class="portfolio-slide !grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
            <?php
            $portfolio_query = new WP_Query([
                'post_type'      => 'portfolio',
                'posts_per_page' => 3,
                'paged'          => 1
            ]);

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    get_template_part('template-parts/card');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>

    <!-- Prev Button -->
    <button id="portfolio-prev"
        class="absolute hidden xl:flex cursor-pointer -left-4 top-1/2 -translate-y-1/2 h-[calc(100%-8rem)] w-12 bg-stone-200 hover:bg-primary/40 items-center text-gray-600  justify-center z-10 rounded-r">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Next Button -->
    <button id="portfolio-next"
        class="absolute hidden xl:flex cursor-pointer -right-4 top-1/2 -translate-y-1/2 h-[calc(100%-8rem)] w-12 bg-stone-200 hover:bg-primary/40 items-center text-gray-600 justify-center z-10 rounded-l">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Mobile nav buttons -->
    <div class="flex xl:hidden justify-between gap-4 mt-4">
        <button id="portfolio-prev-mobile" class="p-4 bg-stone-100 rounded-full hover:bg-primary/40 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="portfolio-next-mobile" class="p-4 bg-stone-100 rounded-full hover:bg-primary/40 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</section>


<?php get_footer(); ?>