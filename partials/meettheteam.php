<?php /*
===================================================================
ABOUT PAGE

2 layouts
- Centred text, two-column meet the team

===================================================================
*/ ?>



<div class="meet-the-team centered-text">

  <?//make a variable that captures the Title of page ID 57, e=meet the team ?>
  
  <?php $title = get_the_title(57); ?>
  <h2 class="larger-h2"><?php echo $title ?></h2>


  <!-- Bring in the custom post type of team -->
  <?php  
    $teamQuery = new WP_Query(
    array(
    'posts_per_page => -1',     
    'post_type' => 'team-member',
    )
  ) ;?>

  <!-- Create the custom loop for team members -->
  <!-- Team is CPT so I can reorder them -->
  <?php if ( $teamQuery->have_posts() ) while ( $teamQuery->have_posts() ) : $teamQuery->the_post(); ?>

  <div class="team-member clearfix">
    <div class="personal info">
      <h2 class="name"><?php the_title(); ?></h2>
      <h3 class="role"><?php the_field('role') ?></h3>
    </div> <!-- /.personal-info -->

    <div class="contactinfo">
      <ul>
        <li>
          <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
        </li>
        <li>
          <a href="<?php the_field('phone_number') ; ?>"><?php the_field('phone_number') ?></a>
        </li>
        <li class="vcard">
          <?php if( get_field('vcard') ): ?>

            <a href="<?php the_field('vcard'); ?>" >download vcard</a>

          <?php endif; ?>
        </li>
       </ul>
    </div><!-- /.contact-info --> 
    
      <button class="accordion">Read Bio</button>      
      <div class="panel">
        <p><?php the_content(); ?></p> 
      </div> <!-- /.panel -->
      
         
    
    
  </div><!-- /.team-member -->

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?><!-- Always reset after custom loop -->
</div>


