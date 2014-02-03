<?php
/**
 * Neat reusable functions
 * @package WordPress
 * @subpackage gribble
 */

add_theme_support('post-thumbnails');

function display_recent_comments() {
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
               	
		echo('<div class="sidebar-comment"><br /><a href="' . $post_permalink . '#comment-' . $comment->comment_ID . '">' . $post->post_title . '</a>' .
                '<br />Comment by ' . $commenter_display .
                ' at ' . $comment->comment_date .
               	'<br /><span class="sidebar-comment-quote">"' . $comment_content_excerpt . '"</span></div>');
	endforeach;
}
?>
