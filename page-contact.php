<?php 
// Advanced Custom Fields
$ninja_form										= get_field('ninja_form');

?>

<?php
/*
	Template Name: Contact Page

 */

get_header(); ?>

  <!-- CONTACT ME
    ================================================== -->

    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<h2>Have any questions? Feel free to get in touch with me! I&rsquo;ll do my best to get back to you ASAP.</h2>
			    	<?php echo do_shortcode('[ninja_form id=1]'); ?>
			    	
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>
