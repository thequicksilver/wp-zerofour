<?php
/**
 * Template Name: Default Page Template (Right Sidebar)
 *
 * @package WordPress
 * @subpackage WP-ZeroFour
 * @since WP-ZeroFour 1.0
 */

get_header(); ?>
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u">
									<div id="content skel-cell-important">
<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
		// Include the page content template.
		get_template_part( 'content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
?>
									</div>  <!-- #content.skel-cell-important -->
								</div>  <!-- .8u -->
								
								<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
								<div class="4u">
									<div id="sidebar" class="primary-sidebar widget-area" role="complementary">

										<?php dynamic_sidebar( 'sidebar-1' ); ?>
								
									</div>  <!-- #sidebar -->
								</div>  <!-- .4u -->
								<?php endif; ?>
							</div>  <!-- .row -->
						</div>  <!-- .container -->
					</div>  <!-- .inner -->
				</div>  <!-- .main-wrapper-style2 -->
<?php get_template_part( 'loop', 'recent-posts' ); ?>
			</div>

<?php get_footer(); ?>