<?php

/*
	Template Name: Home Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="main-content">
        <?//php if ( function_exists( 'soliloquy' ) ) { soliloquy( '148' ); } ?>
       
          <?//php the_field('main_content'); ?>
      
      </div>
      <?php get_template_part('partials/home' ); ?>
     
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>