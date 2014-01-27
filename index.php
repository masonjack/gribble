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
               endwhile;
             endif;
         ?>

      </div>
  
<?php
   get_sidebar();
   get_footer();
?>

