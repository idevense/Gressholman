<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wprig
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		// We need to tell WordPress to look for our custom taxonomy lists

$taxo_text = "";

// Then we need to tell it which one we want in particular and store it for use in our code.

$artist_list = get_the_term_list( $post->ID, 'artist', '<strong>In this post:</strong> ', ', ', '' );
if ( '' != $artist_list ) {
  $taxo_text .= "$artist_list<br />\n";
}

// Now we need to tell Wordpress exactly how we want to display the tag

if ( '' != $taxo_text ) {
?>
<div class="entry-utility">
<?php
echo $taxo_text;
?>
</div>
<?php
// This just let's WordPress know that there's an else argument. It will remove the 'In this post' if no artists have been tagged.

    }
?>


		<?php
		while ( have_posts() ) :
			the_post();

			/*
			* Include the component stylesheet for the content.
			* This call runs only once on index and archive pages.
			* At some point, override functionality should be built in similar to the template part below.
			*/
			wp_print_styles( array( 'wprig-content' ) ); // Note: If this was already done it will be skipped.

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
//get_sidebar();
get_footer();
