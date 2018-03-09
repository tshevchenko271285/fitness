<!-- =========================
    NEWSLETTER SECTION   

    ACF FLEXIBLE >>
    	title[text],
    	background[image],
    	description[textarea]
============================== -->
<?php 

	$title = get_sub_field('title') ? get_sub_field('title') : '';
	$description = get_sub_field('description') ? get_sub_field('description') : '';
	$bg_image = get_sub_field('bg_image') ? 'style="background-image: url(' . get_sub_field('bg_image') . ')"' : '';

?>
<section <?php echo $bg_image ?> id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<?php if ( strlen( $title ) ): ?>
					<h2><?php echo $title ?></h2>
				<?php endif ?>
				
				<?php if ( strlen( $description ) ): ?>
					<p><?php echo $description ?></p>
				<?php endif ?>
				<div class="newsletter_detail">
					<?php echo do_shortcode('[mc4wp_form id="118"]'); ?>
				</div>
			</div>

		</div>
	</div>
</section>