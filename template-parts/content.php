<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pysched4health_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-image">
		  <img src="assets/img/article_one.png" alt="article one photo">
		</div><!-- post-image -->
	
	<header class="entry-header">
			<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
						<div class="post-details">
			    			<i class="fa fa-user"></i> <?php the_author(); ?>
								<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
								<i class="fa fa-folder"></i> <?php the_category(', '); ?>
								<i class="fa fa-tags"></i> <?php the_tags(); ?>
							
							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> <php comments_number(0, 1, '%'); ?></a>
							</div><!-- post-comments-badge -->
							<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
		    		</div><!-- post-details -->

				<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="post-excerpt">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt... <a href="post.html">continue reading &raquo;</a>
	</p>
</div><!-- post-excerpt -->
	
</article><!-- #post-## -->
