<?php
/**
 * Generic template for displaying content when no specific template exists
 *
 * @package WordPress
 * @subpackage gribble
 */
?>

<?php
   get_header();
?>

      <div id=""primary>

         <?php
            if ( have_posts() ) :
               while ( have_posts() ) : the_post();
                     get_template_part( 'content', get_post_format() );
                     
                     // prints contents of custom fields
                     $description = get_post_meta(get_the_ID(), "description", true);
                     if ($description !== "") :
                        echo "DESCRIPTION: $description";
                     endif;

                     $quote = get_post_meta(get_the_ID(), "quote", true);
                     if ($quote !== "") :
                        echo "QUOTE: $quote";
                     endif;

               endwhile;
             endif;
         ?>

      </div>

<?php
   get_sidebar();
   get_footer();
?>
