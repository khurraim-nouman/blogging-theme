<?php get_header(); ?>

<div class='container'> 

    <h1><?php the_title(); ?></h1>


    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <div class='card'>
       <div class='row'>

            <div class='col-sm-4 col-md-4 col-12'>
                <?php the_post_thumbnail(); ?>
            </div>

            <div class='col-sm-8 col-md-8 col-12'>
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
            </div>

       </div>  

    </div>

    <?php endwhile; else: endif; ?>

</div>


<?php get_footer(); ?>


