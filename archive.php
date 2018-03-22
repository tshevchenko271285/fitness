<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitnes
 */

get_header(); ?>

<section id="blog" class="parallax-section">
    <div class="container">
        <div class="row">
		<?php
		if ( have_posts() ) : ?>
            <div class="col-md-12 col-sm-12 text-center">
				<?php
					the_archive_title( '<h2>', '</h2>' );
					the_archive_description( '<p>', '</p>' );
				?>
            </div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
                $terms = wp_get_object_terms(get_the_id(), 'category');
                $categoty = $terms[0]->name ? $terms[0]->name . ' / ' : '';
                ?>
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
                    <div class="blog-thumb" style="background-image: url( <?php echo the_post_thumbnail_url()?> )">
                        <span class="blog-date"><?php echo $categoty ?> <?php echo get_the_date(); ?></span>
                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                        <h5 id="blog-author">by <?php the_author() ?></h5>
                    </div>
                </div>
            <?php
			endwhile;
			the_posts_navigation();
		else :
		endif; ?>
        </div>
    </div>
</section>

<?php
//get_sidebar();
get_footer();
