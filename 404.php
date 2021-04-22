<?php get_header(); ?>

<div class="container">
   <h2 class='text-center' style='padding-top: 50px; margin-bottom: 50px;'>
       The Page You are looking For Cannot Be Found
   </h2>

   <hr style='width: 50%;'>

   <p class='text-center' style='margin-bottom: 50px;'>Go Back To <a href='/'>HomePage</a></p>

</div>
<?php get_footer(); ?>


<script>

// Automatically Returns User To Homepage After 3 Seconds
setTimeout( () => {
    window.open('/', '_self');
}, 3000);

</script>