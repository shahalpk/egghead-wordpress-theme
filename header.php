<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Egghead
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

	<!--[if lte IE 8]>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
	<!--<![endif]-->

	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Libre+Franklin:900|Open+Sans:400,600" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'egghead' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="center clear">
			<div class="site-branding">
				<?php
				the_custom_logo();
				$description = get_bloginfo( 'description', 'display' );
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> <span style="font-size:3rem">#blog</span> </a></h1>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'egghead' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
			<!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div class="site-description">
		<div class="center">
			<?php
				if ( is_singular() ) :
					the_title( '<h1>', '</h1>' );
				else:
					echo "<h1>". $description ."</h1>";
				endif;
			?>

		</div>
	</div>

	<div id="content" class="site-content">
