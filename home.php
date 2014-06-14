<?php get_header(); ?>


<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
	'posts_per_page'   => 5,
	'paged'            => $paged,
	'category'         => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true );
 ?>


			<div id="content" class="container">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						<h1 class="h2 entry-title"><?php the_title(); ?></h1>
							<?php the_post(); the_content(); ?>

							 <?php $temp_query = clone $wp_query; 

							 $wp_query = new WP_Query( $args ); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard">
										<?php printf( __( 'Posted', 'bonestheme' ) . ' <time class="updated" datetime="%1$s" pubdate>%2$s</time> ' . __('by', 'bonestheme' ) . ' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), _n( '<span>%</span> Comments', '<span>%</span> Comments', get_comments_number(), 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<div class=""><?php next_posts_link( 'Older posts' ); ?></div>
									<div class=""><?php previous_posts_link( 'Newer posts' ); ?></div>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							<?php $wp_query = clone $temp_query; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
