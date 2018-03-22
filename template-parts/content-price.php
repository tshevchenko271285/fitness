<?php
$title = get_sub_field('tistle') ? get_sub_field('tistle') : '';
$description = get_sub_field('description') ? get_sub_field('description') : '';
$background = get_sub_field('background') ? 'style="background-image: url('. get_sub_field('background') .')"' : '';
$prices = get_sub_field('prices') ? get_sub_field('prices') : false;

?>
<section id="price" class="parallax-section" <?php echo $background; ?> >
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<?php if( $title ) :?>
					<h2><?php echo $title; ?></h2>
				<?php endif; ?>
				<?php if( $description ) :?>
					<p><?php echo $description; ?></p>
				<?php endif; ?>
			</div>
			<?php if( is_array( $prices ) ) : ?>
				<?php foreach($prices as $price) :?>
					<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
						<div class="pricing__item">
							<?php if( strlen($price['title']) ) :?>
								<h3 class="pricing__title"><?php echo $price['title']?></h3>
							<?php endif; ?>
							<?php if( strlen($price['title']) ) :?>
								<div class="pricing__price"><?php echo $price['price']?></div>
							<?php endif; ?>
							<?php if( is_array( $price['list'] ) ) : ?>
								<ul class="pricing__feature-list">
								<?php foreach($price['list'] as $item) :?>
									<li class="pricing__feature"><?php echo $item['item'] ?></li>
								<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<?php if( strlen( $price['button_text'] ) ) :?>
								<button class="pricing__action"><?php echo $price['button_text']; ?></button>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>