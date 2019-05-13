<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
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
					<?php esc_html_e( 'Meny', 'wprig' ); ?>
				</button>

				<div class="primary-menu-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-trnsp" alt="" src="<?php echo THEME_IMG_PATH; ?>/logo_gressholman_trnsp.png"></a>
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

	<?php if ( is_front_page() && is_home() ) {
		//default homepage
		echo '<script>console.log("Your stuff here")</script>';
	 } elseif ( is_front_page() ) {
		 //static homepage
		 echo '<script>console.log("statisk")</script>';
		 ?>

	 <?php } elseif ( is_home() ) {
		 //blog page
		 ?>
		 <div id="bottomline">
				<p id="kopibeskyttelse">
					<span class="copyright-symbol">©</span> COPYRIGHT STEGELHOLMEN AS 2019<span>&nbsp;|&nbsp;</span><a id="personvern" href="https://gressholman.no/?page_id=46">PERSONVERN</a>
        		</p>
				<div id="socialicons">
					<a class="iconcontainer mailicon" href="mailto:post@gressholman.no">
						<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="1254 4629.759 13.025 10.233">
    						<defs><style>.cls-1{fill:#121010}</style></defs>
   				 			<g id="envelope" data-name="envelope" transform="translate(1254 4629.759)">
     			   			<g id="Group_368" data-name="Group 368">
       			     			<path id="Path_460" d="M1.25 57.974q.247.174 1.49 1.036t1.9 1.326l.309.222q.236.171.392.276t.378.236a2.193 2.193 0 0 0 .418.2 1.151 1.151 0 0 0 .363.065h.02a1.152 1.152 0 0 0 .363-.065 2.195 2.195 0 0 0 .418-.2q.222-.131.378-.236t.392-.276l.309-.222 3.4-2.362a3.453 3.453 0 0 0 .887-.894 1.919 1.919 0 0 0 .356-1.1 1.173 1.173 0 0 0-1.163-1.163H1.163A1.038 1.038 0 0 0 .3 55.2a1.467 1.467 0 0 0-.3.945 1.7 1.7 0 0 0 .4.992 3.608 3.608 0 0 0 .85.837z" class="cls-1" data-name="Path 460" transform="translate(0 -54.82)"/>
        			    		<path id="Path_461" d="M12.3 185.069q-2.384 1.613-3.619 2.508-.414.305-.672.476a4.15 4.15 0 0 1-.687.349 2.092 2.092 0 0 1-.8.178H6.5a2.092 2.092 0 0 1-.8-.178 4.152 4.152 0 0 1-.687-.349q-.258-.171-.672-.476-.981-.72-3.612-2.508a3.85 3.85 0 0 1-.729-.632v5.771a1.12 1.12 0 0 0 .342.821 1.12 1.12 0 0 0 .821.342h10.7a1.166 1.166 0 0 0 1.163-1.163v-5.771a4.008 4.008 0 0 1-.726.632z" class="cls-1" data-name="Path 461" transform="translate(0 -181.137)"/>
       				 		</g>
    						</g>
						</svg>
					</a>
					<a class="iconcontainer billetticon" href="https://www.ticketmaster.no/artist/gressholman-festivalen-billetter/1012382" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
							<path d="m319.566406 0-319.566406 319.566406 67.449219 67.449219 9.605469-4.65625c15.074218-7.3125 33.160156-4.265625 45.003906 7.578125 11.847656 11.847656 14.894531 29.933594 7.582031 45.007812l-4.660156 9.605469 67.449219 67.449219 319.570312-319.566406zm62.949219 237.003906 21.214844-21.210937 21.230469 21.230469-21.214844 21.214843zm-42.917969-42.914062 21.214844-21.214844 21.230469 21.230469-21.210938 21.214843zm-10.632812 53.074218-121.769532 121.773438-21.210937-21.214844 121.769531-121.769531zm-32.285156-95.996093 21.214843-21.210938 21.230469 21.230469-21.214844 21.214844zm-10.632813 53.078125-121.769531 121.769531-21.214844-21.210937 121.773438-121.769532zm-11.050781-74.765625-21.234375-21.230469 21.214843-21.214844 21.230469 21.234375zm0 0"/>
						</svg>
					</a>
					<a class="iconcontainer facebookicon" href="https://www.facebook.com/Gressholman-192343370829140/" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="1276.77 4629 6.288 11.631">
						<defs><style>.cls-1{fill:#121010}</style></defs>
						<g id="facebook-logo" data-name="facebook-logo" transform="translate(1276.77 4629)">
							<path id="Path_458" d="M28.128 0H26.62a2.649 2.649 0 0 0-2.79 2.862v1.32h-1.516a.237.237 0 0 0-.237.237v1.913a.237.237 0 0 0 .237.237h1.517v4.825a.237.237 0 0 0 .237.237h1.979a.237.237 0 0 0 .237-.237V6.569h1.773a.237.237 0 0 0 .237-.237V4.419a.237.237 0 0 0-.237-.237h-1.773V3.063c0-.538.128-.811.829-.811h1.016a.237.237 0 0 0 .237-.237V.24a.237.237 0 0 0-.238-.24z" class="cls-1" data-name="Path 458" transform="translate(-22.077)"/>
						</g>
					</svg>
	 				</a>
				</div>
				<a href="#" id="madeby">Produsert med
					<i class="fa fa-heart-o" aria-hidden="true"></i></a>
			</div>

		 <span class="l1"></span>
			<span class="l2"></span>
			<span class="l3"></span>
			<span class="l4"></span>
			<span class="l5"></span>
			<span class="l6"></span>

		<?php echo '<script>console.log("blog")</script>';
	}
	 else {
		echo '<script>console.log("Yalt anna")</script>';
	 }?>

<?php wp_footer(); ?>

</body>
</html>
