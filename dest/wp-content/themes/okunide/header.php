<!DOCTYPE html>

<html class='no-js' <?php language_attributes(); ?>>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?php wp_title(''); ?></title>

		<link rel='alternate' type='application/rss+xml' title='<?php echo get_bloginfo('sitename') ?> Feed' href='<?php echo get_bloginfo('rss2_url') ?>'>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header role='banner' id='header'>
			<div class='container large'>
				<nav role='navigation'>
					<a id='logo' href='<?php echo home_url( '/' ); ?>' title='Okunidé' rel='home'><span>Okunidé</span><img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' srcset='<?php echo get_template_directory_uri(); ?>/img/logo.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo@2x.png 2x' alt='Okunidé'></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav>
			</div>
		</header>
