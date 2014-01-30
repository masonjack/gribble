<?php
/**
 * Template for opening HTML tag, complete HEAD tag and top rendered pane of site.
 *
 * @package WordPress
 * @subpackage gribble
 */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>
		<?php 
			if (is_home()) :
				bloginfo( 'name' );
			else :
				wp_title();
			endif;
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header class="banner">
				<div class="banner-text-holder">
					<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" id="site-title-link" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</header>
			<div id="main" class="site-main">

