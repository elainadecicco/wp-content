<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */
?>

<?php 
	$header_img = get_template_directory_uri().'/assets/img/freshBeautyLogo2.svg'; //default logo

	$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						if (has_custom_logo()) {
							$header_img = esc_url($logo[0]); //new logo
						}
?>

<!doctype html>
<<<<<<< HEAD
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'sample-theme' ); ?></a>

	<header id="masthead" class="site-header">

	
		
		<div class="site-branding">
			<?php
			
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				
				<?php
			else :
				?>
				
				<?php
			endif;
			$sample_theme_description = get_bloginfo( 'description', 'display' );
			if ( $sample_theme_description || is_customize_preview() ) :
				?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->
		<!-- /*logo */ -->
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/freshBeautyLogo2.svg" alt="Logo" width="350px" height="200px" />
        </a>
		


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sample-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
=======
	<html <?php language_attributes(); ?>>

		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>

			<div id="page" class="site">

				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'sample-theme' ); ?>
				</a>

				<header id="masthead" class="site-header">

					<div class="site-branding">
						<?php
						if ( $sample_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description">
							<?php echo $sample_theme_description; /* WPCS: xss ok. */ ?>
						</p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

						<img id="logo" src="<?php echo $header_img; ?>" alt="Logo" width="350px" height="200px" />

					</a><!--- /*logo */ -->

					<nav id="site-navigation" class="main-navigation">

					<?php
						wp_nav_menu( array(
							'menu_id' => 'primary-menu',
							'container' => '',
							'item' => '<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>'
						) );
						?>
						

					</nav><!-- #site-navigation -->

				</header><!-- #masthead -->

				<div id="content" class="site-content">
>>>>>>> master
