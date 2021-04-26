
<section id='testimonial' style='' > 
    <div class="container" id='slide'>


 <h4 class='text-center pt-5 mb-5'>-What Our Customers Think-</h4>
        
 <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<div class="carousel-inner">
    


  <?php

      
        $testimonialsQuery = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'testimonials',
            'orderby' => 'post_date',
            'order' => 'ASC'
        )); 

        $count = 0;

        while ($testimonialsQuery -> have_posts()) {
        $testimonialsQuery -> the_post();
?>
      
            <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>" >
                <div class="card">
                    <p class='text-center mt-5' id='content'>
                        <?php echo get_the_content(); ?>
                    </p> 

                    <p class='text-center mt-5' id='title'>
                        <?php echo get_the_title(); ?>
                    </p>
                </div>
            </div>


    <?php $count++; } ?>


   
</div>



    <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</section>

<style>
#testimonial {
  background: url(<?php echo get_theme_mod('testimonial_image', get_bloginfo('template_url').'/images/background.jpg') ?>)  center ; 
}

</style>