<!-- =========================
    BLOG SECTION >>

    ACF FLEXIBLE >>
    	title[text],
    	description[textarea],
    	count_post[num]

    + ACF FIELD FOR POST
============================== -->
<?php 
	$title = get_sub_field('title') ? get_sub_field('title') : '';
	$description = get_sub_field('description') ? get_sub_field('description') : '';
	$count_post = get_sub_field('count_post') ? get_sub_field('count_post') : 2;
?>
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 text-center">
				<?php if ( strlen( $title ) ): ?>
					<h2><?php echo $title ?></h2>
				<?php endif ?>
				
				<?php if ( strlen( $description ) ): ?>
					<p><?php echo $description ?></p>
				<?php endif ?>
			</div>
			<?php
			$args = [
				'post_type' => 'post',
				'posts_per_page' => $count_post,

			];
			$query = new WP_Query($args);
			if( $query->have_posts() ){
				while( $query->have_posts() ){ $query->the_post();
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
				
					<?php //the_content(); ?>
				<?php
				}
				wp_reset_postdata();
			} 
			?>
		</div>
	</div>
</section>