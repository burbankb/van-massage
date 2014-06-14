		<footer class="footer" role="contentinfo">
			<div class="first-footer">
				<div class="container">
					<div class="col-xs-12 col-sm-3 list-block">
						<div class="header">About Us</div>
						<?php wp_nav_menu( array( 'theme_location' => 'about-links', 'container_class' => 'act-link' ) ); ?>
					</div>
					<div class="col-xs-12 col-sm-3 list-block">
						<div class="header">Our Services</div>
						<?php wp_nav_menu( array( 'theme_location' => 'services-links', 'container_class' => 'act-link' ) ); ?>
					</div>
					<div class="col-xs-12 col-sm-3 list-block">
						<div class="header">Connect</div>
						<?php wp_nav_menu( array( 'theme_location' => 'connect-links', 'container_class' => 'act-link' ) ); ?>
					</div>
					<div class="col-xs-12 col-sm-3 list-block">
						<div class="header">Contact</div>
						<?php dynamic_sidebar( "Footer Contact Block" ); ?>
					</div>
				</div>
			</div>
			<div class="second-footer">
				<div class="container">
					<div class="col-xs-12 col-sm-10">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-links', 'container_class' => 'footer-links' ) ); ?>
						<div class="copyright">(c) 2014 Accident &amp; Injury Clinic</div>
						<div class="design-attr">Designed by: <a href="http://brandyn.burbankfamily.net">Brandyn Burbank</a></div>
					</div>
					<div class="col-xs-12 col-sm-2 aic_logo">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/aic_logo.png">
					</div>
				</div>
			</div>
		</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
