

<?//php reception image
 ?>
<div class="service-wrapper">
  <div class="half services-image">
    <?php 

    $image = get_field('image_column');

    if( !empty($image) ): ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>
  </div>

  <?//php the services info/content  ?>
  <div class="half services-content">
    <?php the_field('page_content'); ?>
  </div>
</div>

<span class="tenant_contact">24 hour tenant contact <a href="tel:+2049428208">204 942 8208</a></span>


<!-- TESTIMONIAL STARTS -->
<div class="testimonial-wrapper-top-level">

  <?php if( have_rows('testimonial') ): ?>
  <div class="testimonial-content">
    <?php while( have_rows('testimonial') ): the_row(); 
      $image = get_sub_field('logo');
      ?>
  
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="testimonial-logo-img" />
      
      <blockquote class="clearfix">
        <!-- The testimonial is inside of a blockquote. It has three components: The testimonial content, the client name and the client credentials -->
        
        <!-- TESTIMONIAL CONTENT (THE GLOWING REVIEW) -->

        <!-- This stores the testimonial text in the variable $quote -->
        
        <?php //class="quote-placeholder" ?>
          <?php $quote = get_sub_field('testimonial_content'); ?>

        <!-- This prints out the information stored in the $quote variable -->
          <?php echo $quote; ?>
        
        
        <!-- CLIENT NAME (Seperate field so I can apply custom styling) -->
        <?php //class="client-right-align"?>
          
          <!-- This stores the client's name in the variable $client -->
          <?php $client = get_sub_field('client_name_and_company');

            $creds = get_sub_field('client_credentials');
          ; ?>
          
          <!-- This prints out the information stored in $client -->
          <?//php echo $client; ?>
          <?//php echo $creds; ?>
        
        
        <!-- CLIENT CREDENTIALS -->

        <!-- This stores the client credentials like their position or workplace into the variable $creds -->
        <?//php $creds = get_sub_field('client_credentials'); ?>
        <?//php echo $creds; ?>

      </blockquote>
      
      <div class="client-wrapper">
        <!-- <div class="client-right-align"> -->
          <span class="client-right-align"><?php echo $client; ?></span>
        <!-- </div> -->
        <!-- <div class="client-creds"> -->
          <span class="client-creds"><?php echo $creds; ?></span>
        <!-- </div> -->
      </div>
    

    <?php endwhile; ?>
    </div><!-- end of testimonial-content -->



    <?php endif; ?>
<!-- </div>end of testimonial-wrapper-top-level -->