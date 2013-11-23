<?php get_header(); ?>

	<div id="content-main-wrap">

	<?php if (have_posts()) : ?>

		<h2 class="search-header"><?php printf( __( 'Search Results for &ldquo;%s&rdquo;', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="post-header"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

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
