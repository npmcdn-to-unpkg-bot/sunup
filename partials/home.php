<?php 
/*========================
Layouts and components
Two layouts: Image with text overlay, cenetred text with title


IMAGE WITH TEXT OVERLAY
-slider

- acf
 - flexible content
 - repeater for each image
  (image, interesting sentence about the property, link to leasing page [property name])

CENTERED TEXT WITH TITLE
- wysiwyg editor with h1 and content inside

===========================
*/
 ?>

<!-- IMAGE WITH TEXT OVERLAY BEGINS -->
  <div class="main-carousel" data-flickity='{ "cellAlign": "left", "wrapAround": true, "autoPlay": true, "imagesLoaded": true }'>

      <?php
      
      // check if the flexible content field has rows of data
      if( have_rows('image_with_text_overlay_and_link') ):

        // loop through the rows of data
          while ( have_rows('image_with_text_overlay_and_link') ) : the_row();
            

          // check current row layout
              if( get_row_layout() == 'front_page_slider' ):

                // check if the nested repeater field has rows of data
                if( have_rows('background_image_with_text_and_link') ):


              // loop through the rows of data
                while ( have_rows('background_image_with_text_and_link') ) : the_row();
              
                //image
                $image = get_sub_field('background_image'); //when in a loop, you need to use get. This is storing the background image in a variable
                
                echo '<div class="carousel-cell">';
                echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';

                //overlay text
                $overlay = get_sub_field('overlay_text');

                echo '<div class="overlay-whole">';
                echo '<span class="overlay-text">';
                echo $overlay; //this is the text that will appear on top of the image
                echo '</span><br>'; //end overlay text

                //link to leasing page
                $link = get_sub_field('leasing_link'); 

                //name of property
                
                 $property = get_sub_field('property_name');

                echo '<a href="' . $link . '" / class="property-name">' . $property . ' - Learn More</a>';
                echo '</div>'; //end overlay-whole
                echo '</div>';  

              endwhile;



            endif;

              endif;

          endwhile;

      else :

          // no layouts found

      endif;

      ?>
   
  </div><!-- /.overlay -->


  <!-- IMAGE WITH TEXT OVERLAY ENDS -->

  <!-- CENTERED TEXT WITH TITLE BEGINS -->

  <div class="centered-text centred-text">
   <div class="restrict-text">
     <?php the_field('main_content'); ?>
   </div>
  </div>

  <!-- CENTERED TEXT WITH TITLE ENDS -->
