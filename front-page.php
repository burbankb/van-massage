<?php get_header(); ?>

			<div class="hero-banner">
				<div class="container">
				<div class="hero-caption">
					<?php dynamic_sidebar( "Hero Banner" ); ?>
				</div>
				<a href="tel:+1 360-907-4470" class="cta-btn">Call Today<br>
					<span class="ph-num">(360) 907-4470</span>
				</a>
				</div>
			</div>

			<div class="container home-content" id="content">
			<div class="col-xs-12 col-sm-5"><?php dynamic_sidebar( "Homepage Left Content" ); ?></div>
			<div class="col-xs-12 col-sm-7"><?php dynamic_sidebar( "Homepage Right Content" ); ?></div>
			</div>

<?php get_footer(); ?>