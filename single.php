<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pysched4health_2017
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-sm-8" role="main">

		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single');

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
				<!-- SIDEBAR
				================================================== -->
					<aside class="col-sm-4">
							<?php get_sidebar(); ?>
					</aside><!-- aside -->
	</div><!-- #primary -->
</div><!-- container -->


<?php get_footer(); ?>
