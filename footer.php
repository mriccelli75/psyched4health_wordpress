<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pysched4health_2017
 */

?>

<?php wp_footer(); ?>

	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/psyched_4_health_logo_ftr.svg" alt="psyched for health"></a>
			</div><!-- end col -->
			<div class="col-sm-6">
			
							<?php 
										wp_nav_menu( array(
											'theme_location'	=> 'Footer',
											'container'				=> 'nav',
											'menu_class'			=>	'list-unstyled list-inline'
										) );
									?>
					<!--<nav>
					<ul class="list-unstyled list-inline">
						<!--<li><a href="">Fitness</a></li>
						<li><a href="">Focus</a></li>
						<li><a href="">Food</a></li>
						<li><a href="">Family/Fun</a></li>
						<li class="signup-link"><a href="contact.html">Contact Me</a></li>
					</ul>
				</nav>-->
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>


	<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-envelope-alt"></span> Subscribe to our Mailing List</h4>
				</div>
				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	
</body>
</html>
