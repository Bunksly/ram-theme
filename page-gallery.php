<?php
get_header();
?>

<section class="ram-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <h1><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php
// Fetch some gallery images from ALL portfolio posts
$all_images = [];
$limit = 9;
$count = 0;

$portfolio_posts = new WP_Query([
    'post_type'      => 'portfolio',
    'posts_per_page' => -1
]);

if ($portfolio_posts->have_posts()) :
    while ($portfolio_posts->have_posts()) : $portfolio_posts->the_post();
        $gallery = get_field('gallery');
        if ($gallery) {
            foreach ($gallery as $image) {
                $all_images[] = $image;
                $count++;
                if ($count >= $limit) break 2; // stop after 9
            }
        }
    endwhile;
    wp_reset_postdata();
endif;
?>

<?php if (!empty($all_images)) : ?>
    <section class="ram-container ram-gallery py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($all_images as $image) : ?>
            <a href="<?php echo esc_url($image['url']); ?>"
                class="block relative rounded-xs overflow-hidden hoverable-hard-shadow-stone glightbox"
                data-gallery="all-portfolio">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>"
                    class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105" />
            </a>
        <?php endforeach; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>