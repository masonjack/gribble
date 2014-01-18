<?php
/**
 * Comments template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */
?>
        <?php
           $comment_before_text = '<p class="comment-notes">' . __( 'Your email address will not be displayed. I will however add you to a spamming list for penis enlargement products (it\'s for your own good).' ) . ( $req ? $required_text : '' ) . '</p>';
           $comment_after_text = '<p class="form-allowed-tags">You may use CAPS LOCK, but be gentle on your keyboard.</p><p class="form-allowed-tags">Click <a href="http://en.gravatar.com/" target="_blank">here</a> to give yourself a customizable avatar. Or don\'t, I don\'t give a fuck either way. Whatever makes you happy chappy.</p>';
 
           $comment_form_args = array(
              "title_reply" => "Impressed? Depressed? Tell me all about it.",
              "title_reply_to" => __( ' Reply to and/or bitch-slap %s' ),
              "comment_notes_before" => $comment_before_text,
              "comment_notes_after" => $comment_after_text
            );
           comment_form($comment_form_args); 
        ?>


        <?php if ( have_comments() ) : ?>


            <ul class="commentlist">
                <?php wp_list_comments();?>
            </ul>


        <?php else : ?>





        <?php endif; ?>

