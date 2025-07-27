<?php
get_header();
?>

<section class="ram-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <h1>404</h1>
            <div>
                Lost? Check out some of our latest portfolio pieces below, or <a class="!text-primary !underline" href="/">head back home.</a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/portfolioslider', null) ?>

<?php get_footer(); ?>