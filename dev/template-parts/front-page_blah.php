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
<ul class="bg">
	<li class="i-block">
		<img src="<?php bloginfo('template_url'); ?>/images/bckimg.jpg">
</li>
</ul>

<?php
get_footer();
