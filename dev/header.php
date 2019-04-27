<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( is_front_page()) { console.log('yupyup');?>
	<div class="home-video">
	<video autoplay loop muted>
			<source src="<?php echo THEME_VIDEO_PATH; ?>/Gressholman_loop2.mp4" type="video/mp4">Browser is not supportive today
		</video>
	</div>
	<div class="home-overlay"></div>
<?php } ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wprig' ); ?></a>
		<header id="masthead" class="site-header">
			<?php if ( has_header_image() ) : ?>
				<figure class="header-image">
					<?php the_header_image_tag(); ?>
				</figure>
			<?php endif; ?>

			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main menu', 'wprig' ); ?>"
				<?php if ( wprig_is_amp() ) : ?>
					[class]=" siteNavigationMenu.expanded ? 'main-navigation toggled-on' : 'main-navigation' "
				<?php endif; ?>
			>
				<?php if ( wprig_is_amp() ) : ?>
					<amp-state id="siteNavigationMenu">
						<script type="application/json">
							{
								"expanded": false
							}
						</script>
					</amp-state>
				<?php endif; ?>

				<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'wprig' ); ?>" aria-controls="primary-menu" aria-expanded="false"
					<?php if ( wprig_is_amp() ) : ?>
						on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
						[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
					<?php endif; ?>
				>
					<?php esc_html_e( 'Menu', 'wprig' ); ?>
				</button>

				<div class="primary-menu-container">
					<?php

					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => 'ul',
						)
					);

					?>
				</div>
			</nav><!-- #site-navigation -->
		<!--	<div class="label">21/6 - 22/6</div> -->
		</header><!-- #masthead -->
