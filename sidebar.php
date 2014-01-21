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

	<aside>
		<?php
			$comments = get_comments();
			foreach($comments as $comment) :
				$post = get_post($comment->comment_post_ID);
				$post_permalink = get_post_permalink($comment->comment_post_ID);

				echo('<br /><a href="' . $post_permalink . '#comment-' . $comment->comment_ID . '">' . $post->post_title . '</a>' .
					'<br />Comment by ' . $comment->comment_author . 
					' at ' . $comment->comment_date .
					'<br />' . $comment->comment_content);
			endforeach;	
		?>
	</aside>
</div>
