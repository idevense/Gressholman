<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wprig
 */

get_header();

/*
* Include the component stylesheet for the content.
* This call runs only once on index and archive pages.
* At some point, override functionality should be built in similar to the template part below.
*/
wp_print_styles( array( 'wprig-content', 'wprig-front-page' ) ); // Note: If this was already done it will be skipped.

?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
		<?php the_posts_navigation(); ?>
	</main><!-- #primary -->

	<div class="partner-wrapper">
		<div class="partner-section partner1">
			<a href="https://www.w3schools.com">
			<img border="0" alt="PArtner1" src="<?php echo THEME_IMG_PATH; ?>/logo_test.png"></a>
		</div>
		<div class="partner-section partner2">
			<a href="https://www.w3schools.com">
			<img border="0" alt="PArtner2" src="logo_w3s.gif" width="100" height="100"></a>
		</div>
		<div class="partner-section partner3">
			<a href="https://www.w3schools.com">
			<img border="0" alt="PArtner3" src="logo_w3s.gif" width="100" height="100"></a>
		</div>
	</div>

<?php
get_footer();
