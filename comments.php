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
           $comment_after_text = '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),     ' <code>' . allowed_tags() . '</code>' ) . ' Keep in mind that CAPS LOCK works just as well, if not better.</p>';
 
           $comment_form_args = array(
              "title_reply" => "Impressed? Depressed? Tell me all about it.",
              "comment_notes_before" => $comment_before_text,
              "comment_notes_after" => $comment_before_after
            );
           comment_form($comment_form_args); 
        ?>


        <?php if ( have_comments() ) : ?>


            <ul class="commentlist">
                <?php wp_list_comments();?>
            </ul>


        <?php else : ?>





        <?php endif; ?>

