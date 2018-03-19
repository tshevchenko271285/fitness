<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fitnes
 */

get_header();
get_template_part( 'template-parts/content', 'banner-single-post' ); ?>
		<?php
		while ( have_posts() ) : the_post();
?>

<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/content', 'post' ); ?>
			<?php get_sidebar(); ?>
		</div>
		<?php
			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>
		</div>
	</div>
</section>
<?php
get_footer();
