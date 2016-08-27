<?php

/*
	Template Name: About Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      
      <div class="half"> 
      <?php 

      $image = get_field('reception_image');

      if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
      </div><!--/.half for the office image -->

      <div class="about-content half">
        <?php the_content(); ?>
      </div>
      
      <div class="meet-the-team-wrapper">
        <?php get_template_part('partials/meettheteam' ); ?>
      </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>