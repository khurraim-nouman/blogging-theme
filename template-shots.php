<?php
/*
Template Name: Shots Archive
*/
?>

<section id='template_shots'>

<?php get_header(); ?>

<!-- Container Starts Here -->
<div class='container'> 

        <h1 class='text-center'>
            <?php the_title(); ?>
        </h1>

<?php

 $ShotsQuery = new WP_Query(array(
     'posts_per_page' => -1, // -1 to show all posts
     'post_type' => 'shots',
     'orderby' => 'post_date',
     'order' => 'ASC'
 ));

while ($ShotsQuery -> have_posts()) {
    $ShotsQuery -> the_post();

?>

    <!-- Card Begins here -->
    <div class='card' >

      <div class='card-body'> 
        <!-- Row BEgins Here -->
        <div class='row'>


        <div class='col-sm-4 col-md-4 col-12'>
           <a href='<?php echo get_permalink(); ?>'>
                <?php the_post_thumbnail(); ?>
           </a>
        </div>   


        <div class='col-sm-8 col-md-8 col-12'>
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt('100'); ?></p>
            <p>Published On: <?php echo get_the_date(); ?> </p>
            <p>Created By: <?php echo get_the_author(); ?> </p>
            <a href='<?php the_permalink(); ?>'><button class='btn btn-large btn-success'>Read More</button></a>
        </div>   

        <!-- Row Ends Here -->
        </div>

        <!-- Card Body Ends Here -->
        </div>  


        <!-- Card Ends Here -->
        </div>


    <?php } ?>   

    <!-- Container Ends Here --> 
    </div>



</section>

<?php get_footer(); ?>