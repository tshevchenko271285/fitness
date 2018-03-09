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

	//comment_form();
	?>

</div><!-- #comments -->