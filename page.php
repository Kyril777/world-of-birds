<?php get_header(); ?>

			<!-- Spacing.-->
			<div id="spacing">
				<img src="https://financialtribune.com/sites/default/files/styles/slideshow/public/field/image/17january/13_penguins.jpg?itok=YxMZ1gyD&c=28f25d445b31e4c178b2095002f0027f" alt="yellow-eyed penguin" />
			</div>

			<div id="left-space">
			</div>
			<div id="space-container-right">
				<div id="middle-space">
				</div>
				<div id="right-space">
				</div>
			</div>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
