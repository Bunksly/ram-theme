<?php get_header(); ?>

<section class="relative w-full max-h-[calc(100vh-218px)] overflow-hidden">
    <div class="slider h-full">
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide1.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 1">
            <div class="sm:flex absolute inset-0 bg-black/40 hidden items-center">
                <div class="w-full">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
                        <div class="backdrop-blur-sm bg-black/40 p-6 rounded-xl text-white max-w-xl">
                            <h1 class="text-4xl font-bold text-primary">Integrity</h1>
                            <p class="mt-2 text-lg !text-white">Our team is committed to honesty, transparency, and ethical conduct in all aspects of our work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide2.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 2">
            <div class="sm:flex absolute inset-0 bg-black/40 hidden items-center">
                <div class="w-full">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
                        <div class="backdrop-blur-sm bg-black/40 p-6 rounded-xl text-white max-w-xl">
                            <h1 class="text-4xl font-bold text-primary">Customer Satisfaction</h1>
                            <p class="mt-2 text-lg !text-white"> We go above and beyond to exceed our clients' expectations and deliver projects that meet their needs and exceed their vision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/slides/slide3.jpg" class="object-cover w-full h-full aspect-[16/9]" alt="Slide 3">
            <div class="sm:flex absolute inset-0 bg-black/40 hidden items-center">
                <div class="w-full">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
                        <div class="backdrop-blur-sm bg-black/40 p-6 rounded-xl text-white max-w-xl">
                            <h1 class="text-4xl font-bold text-primary">Quality Craftsmanship</h1>
                            <p class="mt-2 text-lg !text-white">From the materials we use to the attention to detail in our workmanship, we are dedicated to delivering projects of the highest quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay content -->

    <div class="sm:hidden inset-0 flex items-center">
        <div class="w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
                <div class="backdrop-blur-sm p-6 rounded-xl  max-w-xl">
                    <h1 class="text-4xl font-bold"><span class="text-primary">RAM</span> Construction</h1>
                    <p class="mt-2 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non imperdiet nunc, eu fermentum elit. Nam ac enim nec lectus ullamcorper finibus imperdiet eget turpis. Praesent at nulla tincidunt, eleifend risus eget, suscipit erat. In quis est vulputate, eleifend massa vitae, consequat est.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>