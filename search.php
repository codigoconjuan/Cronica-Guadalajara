<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="col-md-9">



			<?php get_template_part('loop-search'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
