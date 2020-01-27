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

<body <?php body_class(); ?>>
	<div class="site">

		<!-- Header Includes the Main Nav and the top Nav -->
		<header class="site-header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light site-main-nav">
					<a class="navbar-brand" href="<?= get_home_url(); ?>"><img class="site-logo" src="<?= get_field('site_logo', 'option')['url'] ?>" /></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse">

						<?php
						wp_nav_menu(array(
							'theme_location' => 'my-custom-menu',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav mr-auto',
						));
						?>
						<div class="nav-login">
							Sign up | Sign in
						</div>
					</div>
				</nav>
			</div>
		</header><!-- Header ends -->