<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="row">
			<!-- Testimonial Owl Carousel section
			================================================== -->
			<?php $items = get_sub_field('items') ? get_sub_field('items') : false; ?>
			<div id="owl-testimonial" class="owl-carousel">
				<?php if( is_array( $items ) ) : ?>
					<?php foreach( $items as $item ) : ?>
						<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
							<i class="fa fa-quote-left"></i>
							<?php if( $item['text'] ) : ?>
								<h3><?php echo $item['text']; ?></h3>
							<?php endif; ?>
							<?php if( ( $item['name'] ) ) : ?>
								<h4><?php echo $item['name']; ?></h4>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>