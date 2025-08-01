<?php

/**
 * Portfolio Card Template Part
 *
 * @param string $title
 * @param string $description
 * @param int|string $image (Attachment ID or image URL)
 * @param string $link
 */

$title       = $args['title'] ?? get_the_title();
$description = $args['description'] ?? wp_trim_words(get_the_content(), 20);
$image       = $args['image'] ?? get_post_thumbnail_id();
$link        = $args['link'] ?? get_the_permalink();
?>
<a href="<?php echo esc_url($link); ?>" class="block bg-white rounded-xs border border-stone-200 overflow-hidden <?php echo $link ? 'hover:border-r-primary hover:border-b-primary hoverable-hard-shadow-stone' : 'hard-shadow-stone pointer-events-none'; ?>">

    <!-- Image wrapper -->
    <div class="relative">
        <?php
        if (!empty($image)) {
            // If it's an attachment ID
            if (is_numeric($image)) {
                echo wp_get_attachment_image($image, 'large', false, ['class' => 'w-full h-64 object-cover']);
            } else {
                echo '<img src="' . esc_url($image) . '" class="w-full h-64 object-cover" alt="' . esc_attr($title) . '">';
            }
        }
        ?>

        <!-- Nameplate -->
        <div class="absolute -bottom-6 bg-primary rounded-xs px-6 py-2">
            <h4 class="!mb-0 !text-white"><?php echo esc_html($title); ?></h4>
        </div>
    </div>

    <!-- Description -->
    <div class="p-6 pt-10  border-t border-stone-400">
        <p class="text-gray-700 text-base leading-relaxed">
            <?php echo esc_html($description); ?>
        </p>
    </div>
</a>