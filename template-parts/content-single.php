<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pysched4health_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if ( has_post_thumbnail() ) { //check for feature image ?>
		<div class="post-image">
		<?php the_post_thumbnail(); ?>
		  
		</div><!-- post-image -->
	<?php } ?>

	<header class="entry-header">
			<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
						<div class="post-details">
			    			<i class="fa fa-user"></i> <?php the_author(); ?>
								<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
								<i class="fa fa-folder"></i> <?php the_category(', '); ?>
								<i class="fa fa-tags"></i> <?php the_tags(); ?>
							
							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
							</div><!-- post-comments-badge -->
							<?php edit_post_link( 'Edit Post', '<div class="edit-post"><i class="fa fa-pencil"></i>', '</div>' ); ?>
		    		</div><!-- post-details -->

				<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="post-excerpt">
 	<?php the_content(); ?>
</div><!-- post-excerpt -->
	
</article><!-- #post-## -->