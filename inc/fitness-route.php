<?php 
function fitness_route($str) {
	switch($str) {
		case 'banner' : get_template_part( 'template-parts/content', 'banner' ); break;
		case 'overview' : get_template_part( 'template-parts/content', 'overview' ); break;
		case 'trainer' : get_template_part( 'template-parts/content', 'trainer' ); break;
		case 'newsletter' : get_template_part( 'template-parts/content', 'newsletter' ); break;
		case 'blog' : get_template_part( 'template-parts/content', 'blog' ); break;
		case 'price' : get_template_part( 'template-parts/content', 'price' ); break;
		case 'testimonials' : get_template_part( 'template-parts/content', 'testimonials' ); break;
		default : echo 'Not template for ' . $str;
	}
}