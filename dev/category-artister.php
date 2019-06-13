<?php
/**
 * The template for displaying category archives.
 *
 * When active, applies to all category archives.
 * To target a specific category, rename file to category-{slug/id}.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package wprig
 */

get_header(); ?>

	<main id="primary" class="site-main">

	<?php
	if ( have_posts() ) : ?>
		<header class="archive-header">
<?php
// Since this template will only be used for Design category
// we can add category title and description manually.
// or even add images or change the layout
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="archive-logo" alt="" src="<?php echo THEME_IMG_PATH; ?>/logo_gressholman_trnsp.png"></a>
<h1 class="archive-title">Artister</h1>

</header>
<?php
		/* Display the appropriate header when required. */
		//wprig_index_header();

		/* Start the Loop */
		while ( have_posts() ) : the_post();
			/*
			 * Include the component stylesheet for the content.
			 * This call runs only once on index and archive pages.
			 * At some point, override functionality should be built in similar to the template part below.
			 */
			wp_print_styles( array( 'wprig-content' ) ); // Note: If this was already done it will be skipped.
			?>
			<div class="archive-wrapper">
			<a class="archive-block" href="<?php the_permalink() ?>" rel="bookmark" title="Les mer om <?php the_title_attribute(); ?>...">
			<?php if ( has_post_thumbnail()) {
				the_post_thumbnail('wprig-index');
				} else {
					echo '<img src="'?> <?php echo THEME_IMG_PATH; echo '/logo_test.png"/>';
					} ?>
				<div class="archive-excerpt">
				<?php the_title();?>
				</div>
				</a>
			</div> <!-- end archive-wrapper-->
<?php endwhile; // End Loop//the_posts_navigation();

else:
 get_template_part( 'template-parts/content', 'none' );

 endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
