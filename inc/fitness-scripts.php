<?php
/**
 * Enqueue scripts
 */
function fitnes_scripts() {
	
	wp_enqueue_script( 'fitnes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20180213', true );

	wp_enqueue_script( 'fitnes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20180213', true );


	wp_enqueue_script( 'fitnes-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-jquery-parallax', get_template_directory_uri() . '/js/jquery.parallax.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-jquery-nav', get_template_directory_uri() . '/js/jquery.nav.js"', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-jquery-backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20180213', true );
	wp_enqueue_script( 'fitnes-custom-script', get_template_directory_uri() . '/js/custom.js', array(), '20180213', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'fitnes_scripts' );

/*
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
*/