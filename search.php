<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

			<header class="page-header">
				<h3 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'pysched4health_2017' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
				//get_template_part( 'template-parts/content', 'search' );

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
</div>
</div>

<?php 
get_footer(); ?>
