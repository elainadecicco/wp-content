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

	<!-- /*logos */ -->
	<div>
	<?php if (get_theme_mod('nev_theme_facebook_url')){ ?>
		<!-- add other socials by copying the code below -->
			<?php if (get_theme_mod('nev_theme_facebook_url')) { ?>
				<!-- add image file to link -->
				 <a style="margin-left: 10px;" href="#<?php echo get_theme_mod('nev_theme_facebook_url');?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg'; ?>" alt="<?php echo esc_html__('Facebook', 'nev_theme');?>" width="40" height="40"/></a>
			<?php } ?>
		<?php } ?>
		<?php if (get_theme_mod('nev_theme_instagram_url')){ ?>
		<!-- add other socials by copying the code below -->
			<?php if (get_theme_mod('nev_theme_instagram_url')) { ?>
				<!-- add image file to link -->
				 <a style="margin-left: 10px;" href="#<?php echo get_theme_mod('nev_theme_instagram_url');?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/instagram.svg'; ?>" alt="<?php echo esc_html__('Instagram', 'nev_theme');?>" width="40" height="40"/></a>
			<?php } ?>
		<?php } ?>
		<?php if (get_theme_mod('nev_theme_twitter_url')){ ?>
		<!-- add other socials by copying the code below -->
			<?php if (get_theme_mod('nev_theme_twitter_url')) { ?>
				<!-- add image file to link -->
				 <a style="margin-left: 10px;" href="#<?php echo get_theme_mod('nev_theme_twitter_url');?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/twitter.svg'; ?>" alt="<?php echo esc_html__('Twitter', 'nev_theme');?>" width="40" height="40"/></a>
			<?php } ?>
		<?php } ?>
</div>
<?php 
$args = array( 
	'posts_per_page' => 3,
<<<<<<< HEAD
'post_type' => 'community' );
=======
'post_type' => 'reviews' );
>>>>>>> master
 
// the query
$sec_query = new WP_Query( $args );
?>
 
<?php if ( $sec_query->have_posts() ) : ?>
 
<!-- start of the loop. the_post() sets the global $post variable -->
<?php while ( $sec_query->have_posts() ) : $sec_query->the_post(); ?>
 
    <!-- template tags will return values from the post in the $sec_query object
	<?php the_permalink() ?>
    <?php the_title(); ?>
    <?php the_excerpt(); ?>
	<?php the_post_thumbnail('thumbnail'); ?>
 
<?php endwhile; ?><!-- end of the loop -->
 
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>
 
<?php else: ?>
 
<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
 
<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
