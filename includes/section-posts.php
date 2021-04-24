
<section id='recentPosts'>
    <div class="container" >

<?php

 $testimonialsQuery = new WP_Query(array(
     'posts_per_page' => 4, // -1 to show all posts
     'post_type' => 'post',
     'orderby' => 'post_date',
     'order' => 'ASC'
 ));

 ?>

 <h1 class='pt-5 mb-5'>Our Recent Posts</h1>
        
 <div class="row">
  <?php

 while ($testimonialsQuery -> have_posts()) {
     $testimonialsQuery -> the_post();
 
?>


    <div class="col-sm-6 col-md-6 col-12">

<a href=' <?php echo get_post_permalink(); ?> ' >
        <!-- Card Starts From Here -->
        <div class="card">

           <!-- Row Starts From Here -->                    
           <div class="row">
            <div class="col-sm-4 col-md-4 col-12">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="col-sm-8 col-md-8 col-12">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
            </div>

          <!-- Row Ends From Here -->  
          </div>  

        <!-- Card Ends From Here -->  
        </div>
</a>

    </div>


<?php } ?>
</div>




</div>
</section>