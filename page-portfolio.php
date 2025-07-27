<?php
get_header();
$title = get_the_title();
$content = get_the_content();
?>

<section class="ram-container">
    <div class="max-w-4xl">
        <h1><?php echo $title ?></h1>
        <div>
            <?php echo $content ?>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/portfolioslider', null) ?>


<?php get_footer(); ?>