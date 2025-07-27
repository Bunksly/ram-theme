<?php get_header(); ?>

<?php $carousel_repeater = get_field('front_page_carousel'); ?>

<?php if ($carousel_repeater): ?>
    <section class="relative w-full  overflow-hidden">
        <div class="slider h-full sm:max-h-[calc(100vh-240px)]">
            <?php foreach ($carousel_repeater as $slide):
                $title = $slide['title'] ?? '';
                $content = $slide['content'] ?? '';
                $image = $slide['image'] ?? '';
            ?>
                <div class="relative h-full">
                    <div class="flex sm:absolute h-[200px] z-50 inset-0 relative">
                        <div class="w-full">
                            <div class="ram-container">
                                <div class="sm:bg-primary sm:p-6 sm:rounded-xs sm:text-white sm:max-w-xl sm:shadow-[4px_4px_0_white]">
                                    <?php if ($title): ?>
                                        <h1 class="sm:!text-white"><?php echo esc_html($title); ?></h1>
                                    <?php endif; ?>
                                    <?php if ($content): ?>
                                        <p class="mt-2 text-xl sm:!text-white"><?php echo esc_html($content); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full h-[300px] sm:h-[calc(100vh-240px)]">
                        <?php echo wp_get_attachment_image($image['ID'], 'full', false, [
                            'class' => 'absolute inset-0 w-full h-full object-cover'
                        ]); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>