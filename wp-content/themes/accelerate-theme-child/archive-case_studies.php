<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 et_header(); ?>


 	<div id="primary" class="site-content sidebar">
 		<div class="main-content" role="main">

 			<?php while ( have_posts() ) : the_post();
 				$services = get_field('services');
 				$link = get_field('site_link'); ?>

 				<article class="case-study">
 					<aside class="case-study-sidebar">
 						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 						<h4><?php echo $services; ?></h4>

 						<?php the_excerpt(); ?>

 						<p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
 					</aside>
 				</article>
 			<?php endwhile; ?>
 		</div><!-- .main-content -->


 	</div><!-- #primary -->
 	<div class="case-study-images">
 		<?php if($image_1) {
 			echo wp_get_attachment_image($image, $size);
 		 } ?>

 <?php get_footer(); ?>
