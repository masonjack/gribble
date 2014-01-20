<?php
/**
 * Sidebar content for blog.
 *
 * @package WordPress
 * @subpackage gribble
 */
?>

<div class="sidebar">
	<aside>
		<?php get_search_form(); ?>
	</aside>

	<aside>
		<?php
			$page = get_page_by_title('About this Site');

                        $link = '<a href="' . get_page_link( $page->ID ) . '">';
                        $link .= $page->post_title;
                        $link .= '</a>';

                        echo $link;
		?>
	</aside>
</div>
