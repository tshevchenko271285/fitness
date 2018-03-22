<?php
/**
 * The template for displaying all pages throuch ACF PRO Plugin
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thomsoon
 */
get_header(); ?>

<!--Content-->
<?php 
    while ( have_posts() ) : the_post();
        // check if the flexible content field has rows of data
        if( have_rows('page') ):
             // loop through the rows of data
            while ( have_rows('page') ) : the_row();
                fitness_route( get_row_layout() );
            endwhile;
        else :
            // no layouts found
        endif;
    endwhile; // End of the loop.
?>

<?php
get_footer();