<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nev_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	<h3>FreshBeauty 2020 All Rights Reserved</h3>

	<!-- /*logo */ -->
	<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="Logo" width="35px" height="20px" />
	</a>
	
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Logo" width="35px" height="20px" />
	</a>
	
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Logo" width="35px" height="20px" />
    </a></div>
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
