<?php
get_header();
$title = get_the_title();
$content = get_the_content();

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

</section>


<?php get_footer(); ?>