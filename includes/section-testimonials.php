
<section id='testimonial'>
    <div class="container" id='slide'>

<?php

 $testimonialsQuery = new WP_Query(array(
     'posts_per_page' => 1,
     'post_type' => 'testimonials',
     'orderby' => 'post_date',
     'order' => 'ASC'
 ));

 ?>

 <h4 class='text-center pt-5 mb-5'>-What Our Customers Think-</h4>
        

  <?php

 while ($testimonialsQuery -> have_posts()) {
     $testimonialsQuery -> the_post();
?>
      

    <div class="card">
        <p class='text-center mt-5' id='content'>
            <?php echo get_the_content(); ?>
        </p> 

        <p class='text-center mt-5' id='title'>
            <?php echo get_the_title(); ?>
        </p>
    </div>

    <?php } ?>

</div>
</section>