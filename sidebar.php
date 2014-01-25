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
                        $page = get_page_by_title('Archives');

                        $link = '<a href="' . get_page_link( $page->ID ) . '">';
                        $link .= $page->post_title;
                        $link .= '</a>';

                        echo $link;
                ?>
        </aside>

	<aside>
		<?php
			$comments = get_comments(array('number' => 5));
			foreach($comments as $comment) :
				$post = get_post($comment->comment_post_ID);
				$post_permalink = get_post_permalink($comment->comment_post_ID);

				$comment_auth_url = $comment->comment_author_url;
				$commenter_display = "";
				if ($comment_auth_url !== "") :
					$commenter_display = '<a href="http://' . $comment_auth_url  . '">' . $comment->comment_author . '</a>';
				else :
					$commenter_display = $comment->comment_author;
				endif;

				$comment_content = $comment->comment_content;
				$comment_content_excerpt = "";
				$comment_content_excerpt_max_len = 60;

                                if (strlen($comment_content) > $comment_content_excerpt_max_len) :
                                        $comment_content_excerpt = substr($comment_content, 0, $comment_content_excerpt_max_len) . ' ...';
                                else :
                                        $comment_content_excerpt = $comment_content;
                                endif;

				echo('<br /><a href="' . $post_permalink . '#comment-' . $comment->comment_ID . '">' . $post->post_title . '</a>' .
					'<br />Comment by ' . $commenter_display . 
					' at ' . $comment->comment_date .
					'<br />"' . $comment_content_excerpt . '"');
			endforeach;	
		?>
	</aside>

</div>
