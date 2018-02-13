<?php 
function spirit_route($str) {
	switch($str) {
		case 'title_animate' : get_template_part( 'template-parts/content', 'title-animate' ); break;
		default : echo 'Not template for ' . $str;
	}
}