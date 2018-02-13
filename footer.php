<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitnes
 */

$data['title_left_column'] = get_field('title_left_column', 'options') ? get_field('title_left_column', 'options') : '';
$data['text_left_column'] = get_field('text_left_column', 'options') ? get_field('text_left_column', 'options') : '';

$data['title_center_column'] = get_field('title_center_column', 'options') ? get_field('title_center_column', 'options') : '';
$data['working_hours'] = get_field('working_hours', 'options') ? get_field('working_hours', 'options') : false;

$data['title_right_column'] = get_field('title_right_column', 'options') ? get_field('title_right_column', 'options') : '';
$data['socials'] = get_field('socials', 'options') ? get_field('socials', 'options') : false;

$data['copyright_text'] = get_field('copyright_text', 'options') ? get_field('copyright_text', 'options') : '';

$data['desinger'] = get_field('desinger', 'options') ? get_field('desinger', 'options') : false;
if ( $data['desinger'] ) {
	$data['url_desinger'] = get_field('url_desinger', 'options') ? get_field('url_desinger', 'options') : '';
	$data['name_desinger'] = get_field('name_desinger', 'options') ? get_field('name_desinger', 'options') : '';
}

$data['developer'] = get_field('developer', 'options') ? get_field('developer', 'options') : false;
if ( $data['developer'] ) {
	$data['url_developer'] = get_field('url_developer', 'options') ? get_field('url_developer', 'options') : '';
	$data['name_developer'] = get_field('name_developer', 'options') ? get_field('name_developer', 'options') : '';
}

?>
<footer>
	<pre><?php var_dump($data) ?></pre>
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">

				<?php if ( strlen($data['title_left_column']) ): ?>
					<h2><?php echo esc_html( $data['title_left_column'] ) ?></h2>
				<?php endif ?>

				<?php if ( strlen($data['text_left_column']) ): ?>
					<p><?php echo esc_html( $data['text_left_column'] ) ?></p>
				<?php endif ?>

			</div>

			<div class="wow fadeInUp col-md-5 col-sm-4"  data-wow-delay="0.9s">

				<?php if ( strlen($data['title_center_column']) ): ?>
					<h2><?php echo esc_html( $data['title_center_column'] ) ?></h2>
				<?php endif ?>

				<?php if ( is_array( $data['working_hours'] ) ): ?>

					<div>

					<?php foreach ($data['working_hours'] as $working_time): ?>

						<?php if ( strlen( $working_time['title'] ) ): ?>
							<h5><?php echo esc_html( $working_time['title'] ) ?></h5>
						<?php endif ?>

						<?php if ( strlen( $working_time['start_time'] ) && strlen( $working_time['end_time'] ) ): ?>
							<h4><?php echo esc_html( $working_time['start_time'] ) ?> - <?php echo esc_html( $working_time['end_time'] ) ?></h4>
						<?php endif ?>

					<?php endforeach ?>

					</div>

				<?php endif ?>
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="1s">

				<?php if ( strlen($data['title_right_column']) ): ?>
					<h2><?php echo esc_html( $data['title_right_column'] ) ?></h2>
				<?php endif ?>

				<?php if ( is_array( $data['socials'] ) ): ?>
					
					<ul class="social-icon">
						
						<?php foreach ($data['socials'] as $social): ?>
							<?php $wow_delay = rand (3, 9)?>
							
							<li><a href="<?php echo $social['url'] ?>" class="fa <?php echo $social['icon'] ?> wow fadeIn" data-wow-delay="1.<?php echo $wow_delay ?>s"></a></li>

						<?php endforeach ?>

					</ul>

				<?php endif ?>
			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 col-sm-12">
				<p class="copyright-text">
					<?php echo $data['copyright_text'] ?>
					<?php echo date('Y') ?>

					<?php if ( $data['desinger'] ): ?>
                    	| Design: <a rel="<?php echo $data['url_desinger'] ?>" href="http://www.templatemo.com/page/1" target="_parent"><?php echo $data['name_desinger'] ?></a>
					<?php endif ?>

					<?php if ( $data['developer'] ): ?>
                    	| Develop: <a rel="<?php echo $data['url_developer'] ?>" href="http://www.templatemo.com/page/1" target="_parent"><?php echo $data['name_developer'] ?></a>
					<?php endif ?>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
