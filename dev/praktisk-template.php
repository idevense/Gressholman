<?php
/**
 * Template Name: Praktisk Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wprig
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
			while ( have_posts() ) :
			the_post();


			/*
			 * Include the component stylesheet for the content.
			 * This call runs only once on index and archive pages.
			 * At some point, override functionality should be built in similar to the template part below.
			 */
			wp_print_styles( array( 'wprig-content' ) ); // Note: If this was already done it will be skipped.

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.

		//list child pages as accordian
		$curr_page = get_queried_object_id();
		$children = get_page_children( $page_id, $pages );
		$child_wp_query = new WP_Query();
		$all_wp_pages = $child_wp_query->query(array( 'post_type' => 'page', 'posts_per_page' => '-1'));

		$curr_page_children = get_page_children( $curr_page, $all_wp_pages );
		?>
		<div class="accordion_wrapper">

		<?php foreach( $curr_page_children as $child ) {
			$content = $child->post_content;

			if( ! $content )
				continue;
				$content = apply_filters( 'the_content', $content );
				?>
			<button class="accordion"><?php echo get_the_title( $child ); ?><i data-fa-arrow="" class="fa fa-arrow-circle-o-right"></i></button>
			<div class="panel">
				<?php echo $content; ?>
			</div>
		<?php }
		?>
		</div>
	</main><!-- #primary -->

<?php
get_footer();
