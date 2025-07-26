<?php
get_header();
$title = get_the_title();
$content = get_the_content();
$repeater_title = get_field('about_us_repeater_title');
$repeater_rows = get_field('about_us_repeater');

?>

<section class="ram-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <h1><?php echo $title; ?></h1>
            <div>
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>

<section class="ram-container">
    <?php if (!empty($repeater_title)) : ?>
        <h2 class=" mb-12">
            <?php echo esc_html($repeater_title); ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($repeater_rows)) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($repeater_rows as $row) :
                $name        = $row['name'] ?? '';
                $description = $row['description'] ?? '';
                $image       = $row['photo'] ?? '';

                get_template_part('template-parts/card', 'null', [
                    'title'       => $name,
                    'description' => $description,
                    'image'       => $image,
                    'link' => false // attachment ID or image URL
                ]);

            endforeach; ?>
        </div>
    <?php endif; ?>

</section>



<?php get_footer(); ?>