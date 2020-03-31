<?php
/**
 * The home page for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nev_theme
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
			<?php
			the_custom_logo();
			
			$nev_theme_description = get_bloginfo( 'description', 'display' );
			if ( $nev_theme_description || is_customize_preview() ) :
				?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->
			<!-- /*logo */ -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            	<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/freshBeautyLogo2.svg" alt="Logo" width="350px" height="200px" />
			</a>
			
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nev-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<!-- .site-info -->






	<?php
get_sidebar();
get_footer();
?>

	<div id="content" class="site-content">
