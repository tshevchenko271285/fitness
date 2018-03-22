<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitnes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- =========================
     PRE LOADER       
============================== -->
<div  class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>

<!-- =========================
    NAVIGATION SECTION   
============================== -->
<?php if( is_home() ) : ?>
    <div class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <?php if ( has_custom_logo() ): ?>
                    <?php echo the_custom_logo(); ?>
                <?php else: ?>
                    <a href="#" class="navbar-brand"><?php echo bloginfo( 'name' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="collapse navbar-collapse">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'	 => 'nav navbar-nav navbar-right main-navigation',
                        'container'	 	 => false,
                        'walker'          => new Spirit_Main_Menu
                    ) );
                ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Fitness</a>
            </div>
            <div class="collapse navbar-collapse">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-2',
                    'menu_id'        => '',
                    'menu_class'	 => 'nav navbar-nav navbar-right',
                    'container'	 	 => false,
                    'walker'          => new Spirit_Main_Menu
                ) );
                ?>
            </div>

        </div>
    </div>
<?php endif; ?>