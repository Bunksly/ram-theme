<?php
get_header();
$title   = get_the_title();
$content = get_the_content();
$gallery = get_field('gallery');
$latest_portfolios = new WP_Query([
    'post_type'      => 'portfolio',
    'posts_per_page' => 5,
    'post__not_in'   => [get_the_ID()] // Exclude current post
]);
?>

<section class="ram-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <h1><?php echo esc_html($title); ?></h1>
            <div>
                <?php echo wp_kses_post($content); ?>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="sm:block hidden space-y-6 bg-white rounded-xs hard-shadow-stone">
            <div class="bg-primary px-4 py-2 mb-0">
                <span class="text-lg font-semibold text-white">Latest Work</span>
            </div>
            <ul class="space-y-4 p-4">
                <?php

                if ($latest_portfolios->have_posts()) :
                    while ($latest_portfolios->have_posts()) : $latest_portfolios->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"
                                class="block hover:!text-primary hover:underline">
                                <?php the_title(); ?>
                            </a>
                        </li>
                <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<li>No portfolios yet.</li>';
                endif;
                ?>
            </ul>
        </aside>
    </div>
</section>

<?php if ($gallery) : ?>
    <section class="ram-container py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($gallery as $image): ?>
            <a href="<?php echo esc_url($image['url']); ?>"
                class="block relative rounded-xs overflow-hidden hoverable-hard-shadow-stone glightbox"
                data-gallery="portfolio">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>"
                    class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105" />
            </a>
        <?php endforeach; ?>
    </section>
<?php endif; ?>

<section class="ram-container">
    <div class="max-w-7xl mx-auto">

        <!-- Sidebar -->
        <aside class="sm:hidden block space-y-6 bg-white rounded-xs hard-shadow-stone">
            <div class="bg-primary px-4 py-2 mb-0">
                <span class="text-lg font-semibold text-white">Latest Work</span>
            </div>
            <ul class="space-y-4 p-4">
                <?php

                if ($latest_portfolios->have_posts()) :
                    while ($latest_portfolios->have_posts()) : $latest_portfolios->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"
                                class="block hover:!text-primary hover:underline">
                                <?php the_title(); ?>
                            </a>
                        </li>
                <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<li>No portfolios yet.</li>';
                endif;
                ?>
            </ul>
        </aside>
    </div>
</section>

<?php get_footer(); ?>