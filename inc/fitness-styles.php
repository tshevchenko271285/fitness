<?php

function fitnes_styles() {
	wp_enqueue_style( 'fitnes-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fitnes-bootstrap-styles', get_template_directory_uri() . '/layouts/bootstrap.min.css' );
	wp_enqueue_style( 'fitnes-animate-style', get_template_directory_uri() . '/layouts/animate.css' );
	wp_enqueue_style( 'fitnes-font-awesome', get_template_directory_uri() . '/layouts/font-awesome.min.css' );
	wp_enqueue_style( 'fitnes-owl-theme', get_template_directory_uri() . '/layouts/owl.theme.css' );
	wp_enqueue_style( 'fitnes-owl-carousel-style', get_template_directory_uri() . '/layouts/owl.carousel.css' );
	wp_enqueue_style( 'fitnes-custom-style', get_template_directory_uri() . '/layouts/style.css' );
	wp_enqueue_style( 'fitnes-font-Source', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' );
	wp_enqueue_style( 'fitnes-font-Lora', 'https://fonts.googleapis.com/css?family=Lora:700italic' );

}

add_action( 'wp_enqueue_scripts', 'fitnes_styles' );




/*

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

*/