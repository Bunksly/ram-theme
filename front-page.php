<?php get_header(); ?>

<section class="relative w-full max-h-[calc(100vh-240px)] overflow-hidden">
    <div class="slider h-full">
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide1.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 1">
            <div class="sm:flex absolute inset-0  hidden">
                <div class="w-full">
                    <div class="ram-container">
                        <div class="backdrop-blur-md bg-black/60   p-6 rounded-md text-white max-w-xl">
                            <h1 class="text-white">Integrity</h1>
                            <p class="mt-2 text-xl !text-white">Our team is committed to honesty, transparency, and ethical conduct in all aspects of our work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide2.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 2">
            <div class="sm:flex absolute inset-0  hidden">
                <div class="w-full">
                    <div class="ram-container">
                        <div class="backdrop-blur-md bg-black/60 p-6 rounded-md text-white max-w-xl">
                            <h1 class=" text-white">Customer Satisfaction</h1>
                            <p class="mt-2 text-xl !text-white"> We go above and beyond to exceed our clients' expectations and deliver projects that meet their needs and exceed their vision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide3.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 3">
            <div class="sm:flex absolute inset-0 hidden">
                <div class="w-full">
                    <div class="ram-container">
                        <div class="backdrop-blur-md bg-black/60  p-6 rounded-md text-white max-w-xl">
                            <h1 class="text-white">Quality Craftsmanship</h1>
                            <p class="mt-2 text-xl !text-white">From the materials we use to the attention to detail in our workmanship, we are dedicated to delivering projects of the highest quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>