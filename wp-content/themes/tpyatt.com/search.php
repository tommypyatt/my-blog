<?php get_header(); ?>

	<div id="content-main-wrap">

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<div class="meta-top">
			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
		</div>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<div class="meta-bottom">
			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
		</div>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
