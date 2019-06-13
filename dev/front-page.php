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
<main id="primary" class="site-main scroll-container">
	<section id="landing" class="centered">
		<div class="content front-page-title">
		<div id="front-page-header">
			<img class="logotitle" src="<?php echo THEME_IMG_PATH; ?>/logo_gressholman_trnsp.png">
		</div>
		<div id="starwars-board">
  			<div id="starwars-content">
				<p id="tidsrom">21. og 22. juni 2019</p>
    			<p id="subtitle">Artister:</p>
    			<br>
    			<p class="artister">Maria Storeng Mittet - Lars Bremnes m/band</p>
				<p class="artister">Banana Airlines</p>
				<p class="artister">Trond Trudvang</p>
				<p class="artister">Blåregn</p>
				<p class="artister">Ida Falck m/band</p>
				<p class="artister">Tomorrow's Outlook</p>
				<p class="artister">BBQueen & Roots Junction</p>
				<p class="artister">Spectrum</p>
			</div>
		</div>
			<video id="frontvideo" playsinline muted loop autoplay>
				<source src="<?php echo THEME_VIDEO_PATH; ?>/reklame.mp4" type="video/mp4">
			</video>
		<div id="getticket">
			<a href="https://www.ticketmaster.no/artist/gressholman-festivalen-billetter/1012382" target="_blank"><h1>Kjøp billett her!</h1></a>
		</div>
		</div>
	</section>

<section id="informasjon">
	<div class="content informasjon-wrapper">
		<div class="informasjon-content">
		<?php $recent = new WP_Query("page_id=81"); while($recent->have_posts()) : $recent->the_post();?>
            <?php the_content(); ?>
<?php endwhile; ?>
		</div>
	</div>
</section>

	<section id="program">
		<div class="content program-wrapper">
		<ul class="programliste">
  <li class="date">
    <h3>21. juni</h3>
    <p>Fredag</p>
  </li>
  <li class= "events">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">18:00 - </span>
          <span class="event-name">Festivalområdet åpnes</span>
        </a>
      </li>
       <li>
        <a href="https://gressholman.no/blaregn/">
          <span class="event-time">20:00 - </span>
          <span class="event-name">Blåregn</span>
        </a>
      </li>
       <li>
        <a href="https://gressholman.no/viser-pa-veien-maria-haukaas-mittet-lars-bremnes/">
          <span class="event-time">21:15 - </span>
          <span class="event-name">Maria Mittet og Lars Bremnes m/band</span>
        </a>
      </li>
       <li>
        <a href="#">
          <span class="event-time">23:00 - </span>
          <span class="event-name">Spectrum</span>
        </a>
      </li>
       <li>
        <a href="https://gressholman.no/tomorrows-outlook/">
          <span class="event-time">24:00 - </span>
          <span class="event-name">Tomorrow's Outlook</span>
        </a>
      </li>
    </ul>
  </li>
    <li class="date">
    <h3>22. juni</h3>
    <p>Lørdag</p>
  </li>
  <li class= "events">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">18:00 - </span>
          <span class="event-name">Festivalområdet åpnes</span>
        </a>
      </li>

       <li>
        <a href="https://gressholman.no/ida-falck/">
          <span class="event-time">20:00 - </span>
          <span class="event-name">Ida Falck m/band</span>
        </a>
      </li>

       <li>
        <a href="https://gressholman.no/trond-trudvang/">
          <span class="event-time">21:15 - </span>
          <span class="event-name">Trond Trudvang & Harald Markussen</span>
        </a>
      </li>

       <li>
        <a href="https://gressholman.no/banana-airlines/">
          <span class="event-time">22:30 - </span>
          <span class="event-name">Banana Airlines</span>
        </a>
      </li>

       <li>
        <a href="https://gressholman.no/bbqueen-roots-junction/">
          <span class="event-time">24:00 - </span>
          <span class="event-name">BBQueen & Roots Junction</span>
        </a>
      </li>
    </ul>
  </li>
</ul>
</div>
	</section>

<section id="billetter">
	<div class="content">
		<div id="billetter-wrapper">
			<div id="festivalpass" class="billett">
				<div class="buyticket">
					<h1>Festivalpass</h1>
					<a href="https://www.ticketmaster.no/event/gressholman-festivalen-fredagspass-billetter/609225" class="buttonbuyticket waggle" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" height="8em" viewBox="0 0 512 512">
							<path d="m319.566406 0-319.566406 319.566406 67.449219 67.449219 9.605469-4.65625c15.074218-7.3125 33.160156-4.265625 45.003906 7.578125 11.847656 11.847656 14.894531 29.933594 7.582031 45.007812l-4.660156 9.605469 67.449219 67.449219 319.570312-319.566406zm62.949219 237.003906 21.214844-21.210937 21.230469 21.230469-21.214844 21.214843zm-42.917969-42.914062 21.214844-21.214844 21.230469 21.230469-21.210938 21.214843zm-10.632812 53.074218-121.769532 121.773438-21.210937-21.214844 121.769531-121.769531zm-32.285156-95.996093 21.214843-21.210938 21.230469 21.230469-21.214844 21.214844zm-10.632813 53.078125-121.769531 121.769531-21.214844-21.210937 121.773438-121.769532zm-11.050781-74.765625-21.234375-21.230469 21.214843-21.214844 21.230469 21.234375zm0 0"></path>
						</svg></a>
					<h3>Pris fram til 1.juni 790,-</h3>
					<h4>Pris etter 1.juni 990,-</h4>
				</div>
			</div>
			<div id="fridaypass" class="billett">
				<div class="buyticket">
					<h1>Dagspass Fredag</h1>
					<a href="https://www.ticketmaster.no/event/gressholman-festivalen-fredagspass-billetter/609251" class="buttonbuyticket waggle" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" height="8em" viewBox="0 0 512 512">
							<path d="m319.566406 0-319.566406 319.566406 67.449219 67.449219 9.605469-4.65625c15.074218-7.3125 33.160156-4.265625 45.003906 7.578125 11.847656 11.847656 14.894531 29.933594 7.582031 45.007812l-4.660156 9.605469 67.449219 67.449219 319.570312-319.566406zm62.949219 237.003906 21.214844-21.210937 21.230469 21.230469-21.214844 21.214843zm-42.917969-42.914062 21.214844-21.214844 21.230469 21.230469-21.210938 21.214843zm-10.632812 53.074218-121.769532 121.773438-21.210937-21.214844 121.769531-121.769531zm-32.285156-95.996093 21.214843-21.210938 21.230469 21.230469-21.214844 21.214844zm-10.632813 53.078125-121.769531 121.769531-21.214844-21.210937 121.773438-121.769532zm-11.050781-74.765625-21.234375-21.230469 21.214843-21.214844 21.230469 21.234375zm0 0"></path>
						</svg></a>
					<h3>Pris fram til 1.juni 535,-</h3>
					<h4>Pris etter 1.juni 690,-</h4>
				</div>
			</div>
			<div id="saturdaypass" class="billett">
				<div class="buyticket">
					<h1>Dagspass Lørdag</h1>
					<a href="https://www.ticketmaster.no/event/gressholman-festivalen-fredagspass-billetter/609257" class="buttonbuyticket" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" height="8em" viewBox="0 0 512 512">
							<path d="m319.566406 0-319.566406 319.566406 67.449219 67.449219 9.605469-4.65625c15.074218-7.3125 33.160156-4.265625 45.003906 7.578125 11.847656 11.847656 14.894531 29.933594 7.582031 45.007812l-4.660156 9.605469 67.449219 67.449219 319.570312-319.566406zm62.949219 237.003906 21.214844-21.210937 21.230469 21.230469-21.214844 21.214843zm-42.917969-42.914062 21.214844-21.214844 21.230469 21.230469-21.210938 21.214843zm-10.632812 53.074218-121.769532 121.773438-21.210937-21.214844 121.769531-121.769531zm-32.285156-95.996093 21.214843-21.210938 21.230469 21.230469-21.214844 21.214844zm-10.632813 53.078125-121.769531 121.769531-21.214844-21.210937 121.773438-121.769532zm-11.050781-74.765625-21.234375-21.230469 21.214843-21.214844 21.230469 21.234375zm0 0"></path>
						</svg>
					</a>
					<h3>Pris fram til 1.juni 535,-</h3>
					<h4>Pris etter 1.juni 690,-</h4>
				</div>
			</div>
		</div>
	</div>

	</div>
</section>

	<section id="nyheter">
		<div class="news-grid-wrapper">
			<!--<div class="news-header">
				<h2>Nyheter</h2>
			</div>-->
			<div class="news-grid">
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=4' . '&paged='.$paged);

			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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

		<?php wp_reset_postdata(); ?>

		<nav class="excerpts-archive" role="navigation">
			<h2 class="screen-reader-text">Post Navigation</h2>
			<a class="news-block" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
			<h2 class="arkivtekst">Se alle nyheter...</h2></a>
		</nav>
		</div>
		</div> <!-- grid wrapper -->
	</section>
	<section id="lokasjon">
			<div class="content map-wrapper">
			<div id="map"></div>
	</section>
<!--
	<section id="partnere" class="section-partner">

		<div class="partner-wrapper content">
			<div class="partner-section partner-heading">
				<a href="#"><h1>Samarbeidspartnere</h1></a>
			</div>
			<div class="partner-section partner1">
				<a href="https://www.w3schools.com">
				<img border="0" alt="PArtner1" src="<?php echo THEME_IMG_PATH; ?>/logo_test.png"></a>
			</div>
			<div class="partner-section partner2">
				<a href="https://www.w3schools.com">
				<img border="0" alt="PArtner2" src="<?php echo THEME_IMG_PATH; ?>/logo_test.png"></a>
			</div>
			<div class="partner-section partner3">
				<a href="https://www.w3schools.com">
				<img border="0" alt="PArtner3" src="<?php echo THEME_IMG_PATH; ?>/logo_test.png"></a>
			</div>
			<div class="partner-section partner4">
				<a href="https://www.w3schools.com">
				<img border="0" alt="PArtner3" src="<?php echo THEME_IMG_PATH; ?>/logo_test.png"></a>
			</div>
		</div>
	</section>-->
	</main><!-- #primary -->

	<script type="text/javascript">
	new fullScroll({

	// parent container
    container : 'primary',

    // content section
    sections : 'section',

	// animation speed
    animateTime : 0.7,

    // easing for animation
    animateFunction : 'ease',

    // current position
    currentPosition: 0,

    // display dots navigation
    displayDots: true,

    // where to place the dots navigation
    dotsPosition: 'left'
});
</script>

<?php
get_footer();
