<?php
get_header();
the_post();
?>

<div class="section bg-white py-24 md:py-48 snap-always scroll-start scroll-pt-48" id="focus">
    <div class="container overflow-hidden py-24 md:py-48 bg-contain bg-no-repeat bg-center flex flex-col justify-center">

        <h1 class="text-5xl"><?php the_title() ?></h1>
        <div class="content">

			<?php the_content(); ?>

        </div>

    </div>
</div>


<?php get_footer() ?>




