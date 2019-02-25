<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package worldmediainteractive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/WMI_LOGO.png">
		</div><!-- .site-branding -->

        <div class="signin-button">
            <h3>Sign In / Join</h3>
        </div>

		<nav id="site-navigation" class="main-navigation">
            <img src="<?php get_site_url();?>/wp-content/themes/worldmediainteractive/assets/WMI_MENU_ICON.png">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
