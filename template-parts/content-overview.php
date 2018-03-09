<?php 
	$title = get_sub_field('title') ? get_sub_field('title') : '';
	$text = get_sub_field('text') ? get_sub_field('text') : '';
	$image = get_sub_field('image') ? get_sub_field('image') : '';
	$blockquote = get_sub_field('blockquote') ? get_sub_field('blockquote') : '';
	$button = get_sub_field('button') ? get_sub_field('button') : false;
	$button_text = get_sub_field('button_text') ? get_sub_field('button_text') : '';
	$button_url = get_sub_field('button_url') ? get_sub_field('button_url') : '';
?>
<section id="overview" class="parallax-section">
	<div class="container">
			<div class="col-md-6 col-sm-12">
				<img src="<?php echo $image['url'] ?>" class="img-responsive" alt="Overview">
				<?php if ( strlen( $blockquote ) ): ?>
						<blockquote class="wow fadeInUp" data-wow-delay="1.9s">
							<?php echo $blockquote; ?>
						</blockquote>
					<?php endif ?>
			</div>
			<div class="col-md-1"></div>
			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<?php if ( strlen( $title ) ): ?>
						<h2><?php echo $title; ?></h2>
					<?php endif ?>
					<?php echo $text; ?>
					<?php if ( $button ): ?>
						<a href="<?php echo $button_url; ?>" class="btn btn-default smoothScroll"><?php echo $button_text; ?></a>
					<?php endif ?>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>