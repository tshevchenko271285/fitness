<?php 

	$data['title_small'] = get_sub_field('title_small') ? get_sub_field('title_small') : '';
	$data['title_big'] = get_sub_field('title_big') ? get_sub_field('title_big') : '';
	$data['button'] = get_sub_field('button') ? get_sub_field('button') : false;
	if ( $data['button'] ) {
		$data['button_text'] = get_sub_field('button_text') ? get_sub_field('button_text') : '';
	}

	$data['slider'] = get_sub_field('sliders') ? get_sub_field('sliders') : array();
	$data['slider_url'] = array();

	foreach ($data['slider'] as $value) {
		$data['slider_url'][] = $value['url'];
	}
	wp_localize_script( 'fitnes-custom-script', 'backstretchImages', $data['slider_url'] );
?>

<!-- =========================
    HOME SECTION   
============================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s"><?php echo $data['title_small']; ?></h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s"><?php echo $data['title_big']; ?></h1>
				<?php if ( $data['button'] ): ?>
					<a href="#overview" class="wow fadeInUp smoothScroll btn btn-default" data-wow-delay="2s"><?php echo $data['button_text']; ?></a>
				<?php endif ?>
			
			</div>

		</div>
	</div>
</section>