<?php
/**
 * Default template for displaying content
 *
 * @package WordPress
 * @subpackage gribble
 */
?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'expound-featured' ); ?></a>
                </div>
                <?php endif; ?>

                <header class="entry-header">
                        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                </header><!-- .entry-header -->

                <div class="entry-summary">
                        <?php the_excerpt(); ?>
                        <p><a class="button-primary" href="<?php the_permalink(); ?>"><?php _e( 'Continue reading &rarr;', 'expound' ); ?></a></p>
                </div><!-- .entry-summary -->

                <div class="clear"></div>

        </article>

