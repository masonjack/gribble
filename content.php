<?php
/**
 * Default template for displaying content
 *
 * @package WordPress
 * @subpackage gribble
 */
?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_home() ) : ?>

                <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'expound-featured' ); ?></a>
                </div>
                <?php endif; ?>
<?php endif; ?>

                <header class="entry-header">
                        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                </header><!-- .entry-header -->


<?php if ( is_home() ) :

                     // prints contents of custom fields
                     $description = get_post_meta(get_the_ID(), "description", true);
                     if ($description !== "") :
                        echo "DESCRIPTION: $description";
                     endif;

                     $quote = get_post_meta(get_the_ID(), "quote", true);
                     if ($quote !== "") :
                        echo "QUOTE: $quote";
                     endif;

       else : ?>

                <div class="entry-summary">
                        <?php the_excerpt(); ?>
                        <p><a class="button-primary" href="<?php the_permalink(); ?>"><?php _e( 'Continue reading &rarr;', 'expound' ); ?></a></p>
                </div><!-- .entry-summary -->

                <div class="clear"></div>

<?php endif; ?>

        </article>

