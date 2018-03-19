<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitnes
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="blog-comments" class="blog-comment wow fadeInUp" data-wow-delay="1s">
	<?php
	if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php comments_number('no comments', '1 comment', '% comments') ?>
		</h3>
		<?php 
		$args = array(
			'callback' => 'fitnes_comment_start',
			'end-callback' => 'fitnes_comment_end',
			'style' => 'div',
		); ?>
		<?php wp_list_comments($args); ?>
	<?php
	endif;
	?>
</div><!-- #comments -->

    <div class="blog-comment-form wow fadeInUp" data-wow-delay="1s">
        <!--<h3>Leave a comment</h3>-->

        <?php
        $args = array(
            'id_form'      => 'comment-form',
            'title_reply'  => 'Leave a comment',
            'logged_in_as' => '',
            'must_log_in'  => '',
            'comment_notes_before' => '',
            'class_form'   => '',
            'label_submit' => 'Submit',
            'class_submit' => 'form-control',
            'comment_field' => '<div class="col-md-12 col-sm-12"><textarea class="form-control" placeholder="Message" id="comment message" name="comment" rows="5"  aria-required="true" required="required"></textarea></div>',
            'submit_field'  => '<div class="col-md-3 col-sm-3">%1$s %2$s</div>',
            'fields' => array(
                'author' => '<div class="col-md-6 col-sm-6"> <input id="author" class="form-control" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . $aria_req . $html_req . '" /></div>',
                'email'  => '<div class="col-md-6 col-sm-6"> <input id="email" name="email" class="form-control" placeholder="Email"' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>',
            ),
        );
        comment_form($args);
        ?>
    </div>
