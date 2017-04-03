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
			    	
			    	<form role="form" class="clearfix">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-name">Name</label>
									<input type="text" class="form-control input-lg" id="contact-name" placeholder="Your name">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-email">Email</label>
									<input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3"></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div><!-- row -->
						<input type="submit" class="btn btn-info btn-lg pull-left" value="Submit &raquo;">
			        </form>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>
