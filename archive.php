<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pysched4health_2017
 */

get_header(); ?>

	<!-- BLOG CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-8" role="main">

		<?php
		if ( have_posts() ) : ?>

			
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
			<!-- SIDEBAR
				================================================== -->
					<aside class="col-sm-4">
							<?php get_sidebar(); ?>
					</aside><!-- aside -->
	</div><!-- #primary -->
</div><!-- container -->
<?php
get_sidebar();
get_footer();
