<?php 
	$title = get_sub_field('title') ? get_sub_field('title') : '';
	$description = get_sub_field('description') ? get_sub_field('description') : '';
	$treners = get_sub_field('treners') ? get_sub_field('treners') : false;
?>
<section id="trainer" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
				<?php if ( strlen( $title ) ): ?>
					<h2><?php echo $title; ?></h2>
				<?php endif ?>
				<?php if ( strlen( $description ) ): ?>
					<p><?php echo $description; ?></p>
				<?php endif ?>
			</div>
			<?php if ( is_array( $treners ) ): ?>		
			<?php foreach ($treners as $trener): ?>
			<?php $rand_num = rand(3, 9) ?>
				<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.<?php echo $rand_num; ?>s">
					<div class="trainer-thumb">
						<?php if ( strlen($trener['photo']) ): ?>							
							<img src="<?php echo $trener['photo']; ?>" class="img-responsive" alt="Trainer">
						<?php endif ?>

						<div class="trainer-overlay">
							<div class="trainer-des">
								<?php if ( strlen( $trener['name'] ) ): ?>
									<h2><?php echo $trener['name']; ?></h2>
								<?php endif ?>
								<?php if ( strlen( $trener['position'] ) ): ?>
									<h3><?php echo $trener['position']; ?></h3>
								<?php endif ?>
								<ul class="social-icon">

								<?php if ( strlen( $trener['facebook'] ) ): ?>
									<li><a href="<?php echo $trener['facebook'] ?>" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
								<?php endif ?>
								<?php if ( strlen( $trener['twitter'] ) ): ?>
									<li><a href="<?php echo $trener['twitter'] ?>" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
								<?php endif ?>
								<?php if ( strlen( $trener['behance'] ) ): ?>
									<li><a href="<?php echo $trener['behance'] ?>" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
								<?php endif ?>
								</ul>

							</div>
						</div>
					</div>
					<?php if ( strlen( $trener['text'] ) ): ?>
						<p><?php echo $trener['text']; ?></p>
					<?php endif ?>
				</div>

			<?php endforeach ?>
			<?php endif ?>
		</div>
	</div>
</section>
