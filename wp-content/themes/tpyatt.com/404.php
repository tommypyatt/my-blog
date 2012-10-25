<?php get_header(); ?>

	<div id="content-main-wrap">
		<h2>404: Page Not Found</h2>
		<p>That page doesn't exist on this site. You can go to my <a href="<?php echo get_option('home'); ?>/">homepage</a> or use the search bar at the top of the page to try to find the information you are looking for.</p>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>