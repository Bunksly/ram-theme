<?php
get_header();
$title = get_the_title();
$content = get_the_content();
$side_image = get_field('side_image');
$flexible_contact = get_field('contact');
?>

<section class="ram-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <h1><?php echo esc_html($title); ?></h1>
            <div><?php echo wp_kses_post($content); ?></div>

            <?php if (have_rows('contact')): ?>
                <ul class="space-y-4 mb-6">
                    <?php while (have_rows('contact')): the_row(); ?>

                        <?php if (get_row_layout() == 'phone'):
                            $label = get_sub_field('label');
                            $number = get_sub_field('number');
                        ?>
                            <li class="flex items-center gap-4">
                                <span class="font-bold"><?php echo esc_html($label); ?>:</span>
                                <a href="tel:<?php echo esc_attr($number); ?>"
                                    class="hover:!text-primary hover:underline">
                                    <?php echo esc_html($number); ?>
                                </a>
                            </li>

                        <?php elseif (get_row_layout() == 'email'):
                            $address = get_sub_field('address');
                        ?>
                            <li class="flex items-center gap-4">
                                <span class="font-bold">Email:</span>
                                <a href="mailto:<?php echo antispambot($address); ?>"
                                    class="hover:underline hover:!text-primary">
                                    <?php echo esc_html($address); ?>
                                </a>
                            </li>

                        <?php elseif (get_row_layout() == 'social_media_group'): ?>
                            <?php if (have_rows('social_media')): ?>
                                <li class="flex gap-6">
                                    <?php while (have_rows('social_media')): the_row();
                                        $icon = get_sub_field('icon'); // e.g. dashicons-facebook
                                        $link = get_sub_field('link');
                                    ?>
                                        <a href="<?php echo esc_url($link); ?>"
                                            target="_blank" rel="noopener noreferrer"
                                            class="dashicons <?php echo esc_attr($icon); ?> !text-4xl transition-colors duration-200 hover:!text-primary">
                                        </a>
                                    <?php endwhile; ?>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

        <!-- Side Image -->
        <?php if ($side_image): ?>
            <div class="lg:flex hidden lg:justify-end">
                <?php echo wp_get_attachment_image($side_image['ID'], 'large', false, [
                    'class' => 'rounded-xs hard-shadow-primary object-cover'
                ]); ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>