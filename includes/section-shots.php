<section id='shots'>

<div class='container'>  

    <h1 class='text-center'>
        <?php echo get_theme_mod('shots_heading', 'Hello ! We Are Finch Studio '); ?>
    </h1>

    <p class='text-center'>
    
        <?php echo get_theme_mod('shots_paragraph', '    We are digital photography studio specializing in landscape, adverborial
        and conceptual photography, based in New York. We Love To Turn Ideas Into Beautiful Things.'); ?>
    
    </p>

<?php

 $ShotsQuery = new WP_Query(array(
     'posts_per_page' => -1, // -1 to show all posts
     'post_type' => 'shots',
     'orderby' => 'post_date',
     'order' => 'ASC'
 ));

?>

    <div class='row'>

    <h4>
        <?php echo get_theme_mod('shots_subheading', 'Our Awesome Shots'); ?>
    </h4>

    <?php

while ($ShotsQuery -> have_posts()) {
    $ShotsQuery -> the_post();

?>
        <div class='col-sm-4 col-md-4 col-12'>
           <a href='<?php echo get_permalink(); ?>'>
                <?php the_post_thumbnail(); ?>
           </a>
        </div>

    <?php } ?>    
    </div>

</div> 

</section>