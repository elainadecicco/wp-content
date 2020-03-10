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

	<!-- /*logo */ -->
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="Logo" width="350px" height="200px" />
	</a>
	
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Logo" width="350px" height="200px" />
	</a>
	
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img id="instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Logo" width="350px" height="200px" />
    </a>
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
