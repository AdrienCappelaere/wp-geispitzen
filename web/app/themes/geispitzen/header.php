<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geispitzen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Open+Sans&display=swap" rel="stylesheet">
	<script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geispitzen' ); ?></a>

	<header id="masthead" class="header-bloc">
		<div class="header-branding">
			<?php the_custom_logo();?>
			<div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<p class="title-site underline-ylw">Musique</p><br>
					<p class="title-site underline-ylw">Concordia de</p><br>
					<p class="title-site underline-ylw">Geispitzen</p>
				</a>
			</div>
				<?php
			// endif;
			$geispitzen_description = get_bloginfo( 'description', 'display' );
			if ( $geispitzen_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $geispitzen_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="hamburger hamburger--squeeze menu-toggle" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
