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
            ?>
                <div class="bg-white rounded-xs hard-shadow-stone border border-stone-200 overflow-hidden">
                    <!-- Image wrapper -->
                    <div class="relative">
                        <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'w-full h-64 object-contain']); ?>

                        <!-- Nameplate -->
                        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-primary rounded-xs px-6 py-2">
                            <h4 class=" !mb-0 !text-white"><?php echo esc_html($name); ?></h3>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="p-6 pt-10 text-center border-t border-stone-400">
                        <p class="text-gray-700 text-base leading-relaxed">
                            <?php echo esc_html($description); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>



<?php get_footer(); ?>