<?php get_header();

$carousel_repeater = get_field('front_page_carousel');

$testimonial_repeater = get_field('testimonials');

?>

<?php if ($carousel_repeater): ?>
    <section class="relative w-full  overflow-hidden">
        <div class="slider h-full sm:max-h-[calc(100vh-240px)]">
            <?php foreach ($carousel_repeater as $slide):
                $title = $slide['title'] ?? '';
                $content = $slide['content'] ?? '';
                $image = $slide['image'] ?? '';
            ?>
                <div class="relative h-full">
                    <div class="flex sm:absolute sm:h-[200px] h-full z-50 inset-0 relative ">
                        <div class="w-full">
                            <div class="max-w-7xl mx-auto p-0 sm:p-6 md:p-8 sm:h-auto h-full">
                                <div class="bg-primary p-6 sm:rounded-xs text-white sm:max-w-xl sm:shadow-[4px_4px_0_white] sm:border-none border-b-4 border-white">
                                    <?php if ($title): ?>
                                        <h1 class="!text-white"><?php echo esc_html($title); ?></h1>
                                    <?php endif; ?>
                                    <?php if ($content): ?>
                                        <p class="mt-2 text-xl !text-white"><?php echo esc_html($content); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full h-[calc(50vh)] md:h-[calc(100vh-240px)]">
                        <?php echo wp_get_attachment_image($image['ID'], 'full', false, [
                            'class' => 'absolute inset-0 w-full h-full object-cover'
                        ]); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php if ($testimonial_repeater): ?>
    <section class="max-w-7xl mx-auto py-8">
        <h2 class="text-3xl font-bold !mb-8 px-4 sm:px-6 md:px-8 ">Testimonials</h2>

        <div class="testimonial-slider grid">
            <?php foreach ($testimonial_repeater as $testimonial):
                $label = $testimonial['label'] ?? '';
                $quote = $testimonial['quote'] ?? '';
            ?>
                <div class="px-4 sm:px-6 md:px-8 py-6 sm:py-8 md:py-10">
                    <div class="bg-white rounded-md hard-shadow-stone p-8 h-full flex flex-col relative">
                        <div class="absolute -top-5 left-5 flex items-center justify-center h-10 w-10 bg-primary rounded-full">
                            <svg class="w-7 h-7" viewBox="0 0 64 64" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.194,12l0,8.025c-2.537,0.14 -4.458,0.603 -5.761,1.39c-1.304,0.787 -2.22,2.063 -2.749,3.829c-0.528,1.766 -0.793,4.292 -0.793,7.579l9.303,0l0,19.145l-19.081,0l0,-18.201c0,-7.518 1.612,-13.025 4.836,-16.522c3.225,-3.497 7.973,-5.245 14.245,-5.245Zm28.806,0l0,8.025c-2.537,0.14 -4.457,0.586 -5.761,1.338c-1.304,0.751 -2.247,2.028 -2.828,3.829c-0.581,1.8 -0.872,4.344 -0.872,7.631l9.461,0l0,19.145l-19.186,0l0,-18.201c0,-7.518 1.603,-13.025 4.809,-16.522c3.207,-3.497 7.999,-5.245 14.377,-5.245Z" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-700 italic flex-grow"><?php echo esc_html($quote); ?></p>
                        <?php if ($label): ?>
                            <p class="mt-6 text-right font-bold text-gray-900"><?php echo esc_html($label); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Buttons underneath -->
        <div class="flex justify-between gap-4 mt-8 px-4 sm:px-6 md:px-8">
            <button type="button" class="testimonial-prev bg-white  hoverable-hard-shadow-stone cursor-pointer rounded-xs w-12 h-12 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button type="button" class="testimonial-next bg-white  cursor-pointer rounded-xs w-12 h-12 flex items-center justify-center hoverable-hard-shadow-stone">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>