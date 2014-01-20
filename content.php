<?php
/**
 * Default template for displaying content
 *
 * @package WordPress
 * @subpackage gribble
 */
?>

<?php if (is_search()) : ?>
	<header class="page-header">
		<h1 class="page-title">Search Results for <span><?php echo get_search_query() ?></span></h1>
		<p>Your spelling is just horrible by the way.</p>
	</header>
<?php endif; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_home() || is_search() ) : ?>

                <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'expound-featured' ); ?></a>
                </div>
                <?php endif; ?>
<?php endif; ?>

                <header class="entry-header">
                        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                </header><!-- .entry-header -->

                <?php 
                   $post_date = the_date('', '<span class=\'date\'>', '</span>', FALSE);
                   $post_date_formatted = str_replace(",", "", $post_date);
                   echo $post_date_formatted;
                ?>


<?php if ( is_home() || is_search() ) :

		if (is_home()) :
                     echo "<div class=\"\">" . comments_number( '', '1', '%' ) . "</div>";
                     comments_popup_link('0', '1', '%');
		endif;
                     // prints contents of custom fields
                     $description = get_post_meta(get_the_ID(), "description", true);
                     if ($description !== "") :
                        echo "<div class=\"description\">$description</div>";
                     endif;

                     $quote = get_post_meta(get_the_ID(), "quote", true);
                     if ($quote !== "") :
                        echo "<div class=\"quote\">$quote</div>";
                     endif;

       else : ?>

                <div class="entry-content">
                        <?php the_content(); ?> 
                </div>

		<div class="prev-and-next-links">
			<?php previous_post_link("<div class='prev-link'>%link</div>"); ?>
			<?php next_post_link("<div class='next-link'>%link</div>"); ?>
		</div>

                <div class="clear"></div>
			<?php		
				if (!is_home() || !is_search()) :
                			comments_template();
				endif;
	endif; ?>

        </article>

