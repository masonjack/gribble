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
            get_template_part( 'featured-content' );

            if ( have_posts() ) :
               // counter to ensure the most recent post isn't shown (as it's the featured post). I really don't want to have to do this and hopefully I'll change this later.
               $first_post = true;
               while ( have_posts() ) : the_post();
                  if ($first_post) :
                     $first_post = false;
                  else :
                     get_template_part( 'content', get_post_format() );
                  endif;                 
               endwhile;
             endif;
         ?>

      </div>

<?php
   get_sidebar();
   get_footer();
?>
