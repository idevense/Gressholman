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
wp_print_styles( array( 'wprig-blog' ) ); // Note: If this was already done it will be skipped.

?>
<main id="primary" class="site-main">
	<h1 style="text-align: center; margin-top:1em;">Nyhetsarkiv</h1>
<div class="news-grid-wrapper">
			<div class="news-grid">
<?php
		while ( have_posts() ) :
			the_post(); ?>

				<a class="news-block" href="<?php the_permalink(); ?>" title="Read more">
					<!-- <article class="news-excerpt"> -->
						<figure class="hover-news">
							<?php if ( has_post_thumbnail()) {
								the_post_thumbnail('wprig-index');
								} else {
									echo '<img src="'?> <?php echo THEME_IMG_PATH; echo '/logo_test.png"/>';
									} ?>
					<!--	<div class="excerpt-content-wrapper"> -->

							<figcaption>
								<h2 class="posted-title"><?php the_title(); ?></h2>
							</figcaption>
							<p class="posted-on"><?php the_time('d F, Y') ?> </p>
							<?php //the_excerpt(); ?>
						<!--</div> -->
						</figure>
				<!--	</article> -->
				</a>
			<?php endwhile; ?>
								</div>
								</div>
	</main><!-- #primary -->


<?php
get_footer();
