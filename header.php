<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KJL_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="KJL-Bot-Team">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<!-- Twitter open-graph tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image:alt" content="KJL-Bot">
	<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
	<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
	<meta name="twitter:image" content="https://kjl-bot.de/wp-content/uploads/2023/02/KJL-Bot-Page.png">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kjl-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'		 => 'ul',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="site-branding" style="//background-image: url('<?php header_image(); ?>')">
		<?php if(!is_404()) { ?>
			<img alt="" src="<?php header_image(); ?>" width="auto<?php //echo absint( get_custom_header()->width ); ?>" height="auto<?php //echo absint( get_custom_header()->height ); ?>">
		<?php } ?>
		<?php if(is_404()) { ?>
			<img alt="" src="<?php echo get_template_directory_uri() . '/images/leeres_regal.jpg'; ?>" width="auto" height="auto" style="width: 100%;">
		<?php } ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
