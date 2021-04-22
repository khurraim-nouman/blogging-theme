<?php get_header(); ?>


<div class="container">

        <h1 class='text-center pt-5 mb-5'>
            <?php the_title(); ?>
        </h1>

        <p class='text-center'>
            <?php   while ( have_posts() ) : the_post();  ?>
            <?php  the_content(); ?>
        </p>

        <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

</div>

<?php get_footer(); ?>