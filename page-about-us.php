<?php
get_header();
$title = get_the_title();
$content = get_the_content();
$repeater_title = get_field('about_us_repeater_title');
$repeater_rows = get_field('about_us_repeater');

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
    <?php if (!empty($repeater_title)) : ?>
        <h2 class=" mb-12">
            <?php echo esc_html($repeater_title); ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($repeater_rows)) : ?>
        <div class="space-y-12">
            <?php foreach ($repeater_rows as $index => $row) :
                $name        = $row['name'] ?? '';
                $description = $row['description'] ?? '';
                $image       = $row['photo'] ?? '';
                $reverse     = $index % 2 !== 0; // every second card reversed
            ?>
                <div class="bg-white rounded-md shadow-md overflow-hidden flex flex-col md:flex-row <?php echo $reverse ? 'md:flex-row-reverse' : ''; ?>">
                    <!-- Image -->
                    <div class="flex-shrink-0 p-4">
                        <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'w-48 h-48 object-cover rounded-md border border-rock-600']); ?>
                    </div>

                    <!-- Content -->
                    <div class="p-6 md:p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-semibold mb-3"><?php echo esc_html($name); ?></h3>
                        <p class="text-gray-700 text-lg leading-relaxed"><?php echo esc_html($description); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>



<?php get_footer(); ?>