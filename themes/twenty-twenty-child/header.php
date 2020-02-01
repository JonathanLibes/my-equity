<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package my-equity
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
	<div class="site">

		<!-- Header Includes the Main Nav and the top Nav -->
		<header class="site-header">
			<div class="mobile-menu-items" style="display: none;">
				<img class="close" src="<?= get_stylesheet_directory_uri().'/images/close_box.png' ?>" alt="">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'my-custom-menu',
				));
				?>
			</div>
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light site-main-nav">
					<a class="navbar-brand m-hide" href="<?= get_home_url(); ?>"><img class="site-logo" src="<?= get_field('site_logo', 'option')['url'] ?>" /></a>
					<a class="navbar-brand d-hide" href="<?= get_home_url(); ?>"><img class="site-logo" src="<?= get_field('site_logo_mobile', 'option')['url'] ?>" /></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="mobile-menu">
						<div class="hamburger"></div>
						<div class="hamburger"></div>
						<div class="hamburger"></div>
						<div class="hamburger"></div>
					</div>

					<div class="collapse navbar-collapse">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'my-custom-menu',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav mr-auto',
						));
						?>

					</div>
				</nav>
			</div>
		</header><!-- Header ends -->