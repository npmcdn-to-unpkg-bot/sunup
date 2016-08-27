<?php

/*
	Template Name: Services Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container services">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      
        <?php get_template_part('partials/services' ); ?>
   

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>