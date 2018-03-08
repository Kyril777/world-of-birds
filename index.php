<?php get_header(); ?>

			<!-- Spacing.-->
			<div id="spacing">
				<img src="https://static1.squarespace.com/static/51cb2bb0e4b028e0e0b7ed46/t/55be7488e4b04be37ac470ba/1438545038433/Loon+1+2015.jpg" alt="loon-canadian-photography" />
			</div>

			<div id="index-page-space">
			</div>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
